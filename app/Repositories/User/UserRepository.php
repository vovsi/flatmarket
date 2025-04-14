<?php

namespace App\Repositories\User;

use App\Components\DTO\DtoContract;
use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryContract
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getIndex(?DtoContract $dto): LengthAwarePaginator
    {
        // TODO: Implement getIndex() method.
    }

    public function getList(?DtoContract $dto): Collection
    {
        // TODO: Implement getList() method.
    }

    public function store(DtoContract $dto): Model
    {
        $this->model->fill($dto->toArray());
        $this->model->save();

        return $this->model;
    }

    public function delete(): Model
    {
        // TODO: Implement delete() method.
    }
}
