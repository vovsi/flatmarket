<?php

namespace App\Services\Users;

use App\Repositories\RepositoryContract;
use App\Repositories\User\UserRepositoryContract;
use App\Services\Controllers\ServiceContract;
use Illuminate\Database\Eloquent\Collection;

class UserService implements UserServiceContract, ServiceContract
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

    public function getList(): Collection
    {
        return $this->repository->getList();
    }
}
