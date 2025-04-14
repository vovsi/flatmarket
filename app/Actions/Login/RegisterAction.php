<?php

namespace App\Actions\Login;

use App\Actions\BaseAction;
use App\Components\DTO\DtoContract;
use Illuminate\Http\RedirectResponse;

class RegisterAction extends BaseAction
{
    public function handle(DtoContract $dto = null): RedirectResponse
    {
        if ($this->getService()->register($dto, $this->getModel())) {
            session()->flash('info', 'Your account has been created!');
        }

        return redirect()->route('main');
    }
}
