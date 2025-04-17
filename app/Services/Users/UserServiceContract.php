<?php

namespace App\Services\Users;

use Illuminate\Database\Eloquent\Collection;

interface UserServiceContract
{
    /**
     * @return Collection
     */
    public function getList(): Collection;
}
