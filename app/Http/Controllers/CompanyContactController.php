<?php

namespace App\Http\Controllers;

use App\Actions\CompanyContact\IndexAction;
use App\Services\Controllers\CompanyContact\CompanyContactService;

class CompanyContactController extends Controller
{
    public function index()
    {
        return app(IndexAction::class, [
            'service' => app(CompanyContactService::class),
        ])->handle();
    }
}
