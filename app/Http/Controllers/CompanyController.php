<?php

namespace App\Http\Controllers;

use App\Actions\Company\ContactsAction;
use App\Services\Controllers\Company\CompanyService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function contacts()
    {
        return app(ContactsAction::class, [
            'service' => app(CompanyService::class),
        ])->handle();
    }
}
