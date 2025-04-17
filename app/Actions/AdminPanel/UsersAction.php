<?php

namespace App\Actions\AdminPanel;

use App\Actions\BaseAction;
use App\Components\DTO\DtoContract;
use Illuminate\View\View;

class UsersAction extends BaseAction
{
    public function handle(DtoContract $dto = null): View
    {
        return view('admin-panel.users', [
            'users' => $this->getService()->getList(),
        ]);
    }
}
