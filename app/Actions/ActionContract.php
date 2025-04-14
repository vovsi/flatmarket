<?php

namespace App\Actions;

use App\Components\DTO\DtoContract;
use App\Services\Controllers\ServiceContract;
use Illuminate\Database\Eloquent\Model;

interface ActionContract
{
    /**
     * @param ServiceContract $service
     * @param Model $model
     * @param string $resource
     */
    public function __construct(ServiceContract $service, Model $model, string $resource);

    /**
     * @param DtoContract $dto
     * @return mixed
     */
    public function handle(DtoContract $dto = null): mixed;

    /**
     * @return ServiceContract
     */
    public function getService(): ServiceContract;

    /**
     * @return Model
     */
    public function getModel(): Model;

    /**
     * @return string
     */
    public function getResource(): string;
}
