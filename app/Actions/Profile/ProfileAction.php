<?php

namespace App\Actions\Profile;

use App\Actions\BaseAction;
use App\Components\DTO\DtoContract;
use Illuminate\View\View;

class ProfileAction extends BaseAction
{
    public function handle(DtoContract $dto = null): View
    {
        session()->flash('_old_input', $this->getService()->showCurrent());

        return view('profile.index');
    }
}
