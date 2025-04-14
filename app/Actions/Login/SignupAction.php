<?php

namespace App\Actions\Login;

use App\Actions\BaseAction;
use App\Components\DTO\DtoContract;
use Illuminate\View\View;

class SignupAction extends BaseAction
{
    /**
     * @param DtoContract|null $dto
     * @return View
     */
    public function handle(DtoContract $dto = null): View
    {
        return view('login.signup');
    }
}
