<?php

namespace App\Repositories;

use App\Components\DTO\DtoContract;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface RepositoryContract
{
    /**
     * @return Model
     */
    public function getModel(): Model;

    /**
     * @param Model $model
     */
    public function setModel(Model $model): void;

    /**
     * @param DtoContract|null $dto
     * @return LengthAwarePaginator
     */
    public function getIndex(?DtoContract $dto): LengthAwarePaginator;

    /**
     * @param DtoContract|null $dto
     * @return Collection
     */
    public function getList(?DtoContract $dto): Collection;

    /**
     * @param DtoContract $dto
     * @return Model
     */
    public function store(DtoContract $dto): Model;

    /**
     * @return Model
     */
    public function delete(): Model;
}
