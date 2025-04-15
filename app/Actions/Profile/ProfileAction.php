<?php

namespace App\Actions\Profile;

use App\Actions\BaseAction;
use App\Components\DTO\DtoContract;
use Illuminate\View\View;

class ProfileAction extends BaseAction
{
    public function handle(DtoContract $dto = null): View
    {
        return view('profile.index', $this->getService()->showCurrent());
    }
}
