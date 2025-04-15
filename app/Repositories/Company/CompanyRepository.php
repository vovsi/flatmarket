<?php

namespace App\Repositories\Company;

use App\Components\DTO\DtoContract;
use App\Models\Company;
use App\Repositories\BaseRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CompanyRepository extends BaseRepository implements CompanyRepositoryContract
{
    public function __construct(Company $model)
    {
        $this->model = $model;
    }

    public function getIndex(?DtoContract $dto): LengthAwarePaginator
    {
        // TODO: Implement getIndex() method.
    }

    public function getList(?DtoContract $dto = null): Collection
    {
        return Company::all();
    }

    public function store(DtoContract $dto): Model
    {
        // TODO: Implement store() method.
    }

    public function delete(): Model
    {
        // TODO: Implement delete() method.
    }
}
