<?php

namespace App\Services\Controllers\Profile;

use App\Components\DTO\Profile\UpdateDto;
use App\Components\DTO\Profile\UpdatePasswordDto;
use App\Models\User;
use App\Services\Controllers\ServiceContract;
use App\Services\Users\UserService;
use Illuminate\Support\Facades\Auth;

class ProfileService extends UserService implements ServiceContract
{
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
