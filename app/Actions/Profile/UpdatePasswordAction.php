<?php

namespace App\Actions\Profile;

use App\Actions\BaseAction;
use App\Components\DTO\DtoContract;
use Illuminate\Http\RedirectResponse;

class UpdatePasswordAction extends BaseAction
{
    public function handle(DtoContract $dto = null): RedirectResponse
    {
        if ($this->getService()->updatePassword($dto, $this->getModel())) {
            session()->flash('info', 'Updated!');

            return redirect()->route('profile');
        }

        return redirect()->back();
    }
}
