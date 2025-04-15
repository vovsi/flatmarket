<?php

namespace App\Services\Controllers\Company;

use App\Repositories\Company\CompanyRepositoryContract;
use App\Repositories\RepositoryContract;
use App\Services\Controllers\ServiceContract;
use Illuminate\Support\Collection;

class CompanyService implements ServiceContract
{
    /**
     * @var RepositoryContract
     */
    protected RepositoryContract $repository;

    /**
     * @param CompanyRepositoryContract $repository
     */
    public function __construct(CompanyRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function contacts(): Collection
    {
        return $this->repository->getList();
    }
}
