<?php

namespace App\Services\Controllers\Login;

use App\Components\DTO\Login\RegisterDto;
use App\Models\User;
use App\Repositories\RepositoryContract;
use App\Repositories\User\UserRepositoryContract;
use App\Services\Controllers\ServiceContract;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginService implements ServiceContract
{
    /**
     * @var RepositoryContract
     */
    protected RepositoryContract $repository;

    /**
     * @param UserRepositoryContract $repository
     */
    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function register(RegisterDto $dto, User $model): User
    {
        $this->repository->setModel($model);
        $dto->setPassword(Hash::make($dto->getPassword()));
        $model = $this->repository->store($dto);
        $model->createToken(env('APP_NAME'))->plainTextToken;

        return $model;
    }

    public function login(array $credentials): bool
    {
        if (Auth::attempt($credentials)) {
            session()->regenerate();
            session()->put('name', Auth::user()->name);

            return true;
        }

        return false;
    }

    public function logout(): bool
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return true;
    }
}
