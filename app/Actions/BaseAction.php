<?php

namespace App\Actions;

use App\Components\DTO\DtoContract;
use App\Services\Controllers\ServiceContract;
use Illuminate\Database\Eloquent\Model;

abstract class BaseAction implements ActionContract
{
    /**
     * @var ServiceContract|null
     */
    private ?ServiceContract $service = null;

    /**
     * @var Model
     */
    private ?Model $model = null;

    /**
     * @var string
     */
    private string $resource;

    /**
     * @param ServiceContract|null $service
     * @param Model|null $model
     * @param string $resource
     */
    public function __construct(ServiceContract $service = null, Model $model = null, string $resource = '') {
        $this->service = $service;
        $this->model = $model;
        $this->resource = $resource;
    }

    /**
     * @param DtoContract|null $dto
     * @return mixed
     */
    abstract public function handle(DtoContract $dto = null): mixed;

    /**
     * @return ServiceContract
     */
    public function getService(): ServiceContract {
        return $this->service;
    }

    /**
     * @return Model
     */
    public function getModel(): Model {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getResource(): string {
        return $this->resource;
    }
}
