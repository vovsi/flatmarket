<?php

namespace App\Actions\Login;

use App\Actions\BaseAction;
use App\Components\DTO\DtoContract;
use Illuminate\Http\RedirectResponse;

class LoginAction extends BaseAction
{
    public function handle(DtoContract $dto = null): RedirectResponse
    {
        if ($this->getService()->login($dto->toArray())) {
            return redirect()->intended();
        }

        return back()->withErrors([
            'email' => 'Wrong email or password.',
        ])->onlyInput('email');
    }
}
