<?php

namespace App\Actions\Company;

use App\Actions\BaseAction;
use App\Components\DTO\DtoContract;
use Illuminate\View\View;

class ContactsAction extends BaseAction
{
    public function handle(DtoContract $dto = null): View
    {
        return view('company.contacts', [
            'contacts' => $this->getService()->contacts(),
        ]);
    }
}
