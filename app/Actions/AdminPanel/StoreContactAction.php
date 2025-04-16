<?php

namespace App\Actions\AdminPanel;

use App\Actions\BaseAction;
use App\Components\DTO\DtoContract;
use Illuminate\Http\RedirectResponse;

class StoreContactAction extends BaseAction
{
    public function handle(DtoContract $dto = null): RedirectResponse
    {
        $this->getService()->store($dto, $this->getModel());

        return redirect()->route("admin.contacts.index");
    }
}
