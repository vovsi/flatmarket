<?php

namespace App\Actions\Login;

use App\Actions\BaseAction;
use App\Components\DTO\DtoContract;
use Illuminate\Http\RedirectResponse;

class LogoutAction extends BaseAction
{
    public function handle(DtoContract $dto = null): RedirectResponse
    {
        $this->getService()->logout();

        return redirect()->route('main');
    }
}
