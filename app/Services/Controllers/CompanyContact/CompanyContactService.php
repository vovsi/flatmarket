<?php

namespace App\Services\Controllers\CompanyContact;

use App\Components\DTO\AdminPanel\StoreContactDto;
use App\Models\CompanyContact;
use App\Repositories\CompanyContact\CompanyContactRepositoryContract;
use App\Repositories\RepositoryContract;
use App\Services\Controllers\ServiceContract;
use Illuminate\Support\Collection;

class CompanyContactService implements ServiceContract
{
    /**
     * @var RepositoryContract
     */
    protected RepositoryContract $repository;

    /**
     * @param CompanyContactRepositoryContract $repository
     */
    public function __construct(CompanyContactRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function contacts(): Collection
    {
        return $this->repository->getList();
    }

    public function store(StoreContactDto $dto, CompanyContact $model): CompanyContact
    {
        $this->repository->setModel($model);

        return $this->repository->store($dto);
    }

    public function destroy(CompanyContact $model): CompanyContact
    {
        $this->repository->setModel($model);

        return $this->repository->delete();
    }
}
