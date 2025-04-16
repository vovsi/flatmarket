<?php

namespace App\Actions\CompanyContact;

use App\Actions\BaseAction;
use App\Components\DTO\DtoContract;
use Illuminate\View\View;

class IndexAction extends BaseAction
{
    public function handle(DtoContract $dto = null): View
    {
        return view('company-contact.index', [
            'contacts' => $this->getService()->contacts(),
        ]);
    }
}
