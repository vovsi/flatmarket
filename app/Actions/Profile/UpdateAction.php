<?php

namespace App\Actions\Profile;

use App\Actions\BaseAction;
use App\Components\DTO\DtoContract;
use Illuminate\Http\RedirectResponse;

class UpdateAction extends BaseAction
{
    public function handle(DtoContract $dto = null): RedirectResponse
    {
        if ($this->getService()->update($dto, $this->getModel())) {
            session()->flash('info', 'Updated!');

            return redirect()->route('profile.index');
        }

        return redirect()->back();
    }
}
