<?php

namespace App\Services\Controllers\Profile;

use App\Components\DTO\Profile\UpdateDto;
use App\Components\DTO\Profile\UpdatePasswordDto;
use App\Models\User;
use App\Repositories\RepositoryContract;
use App\Repositories\User\UserRepositoryContract;
use App\Services\Controllers\ServiceContract;
use Illuminate\Support\Facades\Auth;

class ProfileService implements ServiceContract
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

    public function showCurrent()
    {
        return Auth::user()->toArray();
    }

    public function update(UpdateDto $dto, User $model)
    {
        $this->repository->setModel($model);

        return $this->repository->store($dto);
    }

    public function updatePassword(UpdatePasswordDto $dto, User $model)
    {
        $this->repository->setModel($model);

        return $this->repository->store($dto);
    }
}
