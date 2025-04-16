<?php

namespace App\Repositories\CompanyContact;

use App\Components\DTO\DtoContract;
use App\Models\CompanyContact;
use App\Repositories\BaseRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CompanyContactContactRepository extends BaseRepository implements CompanyContactRepositoryContract
{
    public function __construct(CompanyContact $model)
    {
        $this->model = $model;
    }

    public function getIndex(?DtoContract $dto): LengthAwarePaginator
    {
        // TODO: Implement getIndex() method.
    }

    public function getList(?DtoContract $dto = null): Collection
    {
        return CompanyContact::all();
    }

    public function store(DtoContract $dto): Model
    {
        $this->model->fill($dto->toArray());
        $this->model->save();

        return $this->model;
    }

    public function delete(): Model
    {
        $this->model->delete();

        return $this->model;
    }
}
