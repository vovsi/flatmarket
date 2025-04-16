<?php

namespace App\Http\Controllers;

use App\Actions\AdminPanel\DestroyContactAction;
use App\Actions\AdminPanel\StoreContactAction;
use App\Actions\AdminPanel\ContactsAction;
use App\Components\DTO\AdminPanel\DestroyContactDto;
use App\Components\DTO\AdminPanel\StoreContactDto;
use App\Http\Requests\AdminPanel\DestroyContactRequest;
use App\Http\Requests\AdminPanel\StoreContactRequest;
use App\Models\CompanyContact;
use App\Services\Controllers\CompanyContact\CompanyContactService;

class AdminPanelController extends Controller
{
    public function contacts()
    {
        return app(ContactsAction::class, [
            'service' => app(CompanyContactService::class),
        ])->handle();
    }

    public function storeContact(StoreContactRequest $request)
    {
        return app(StoreContactAction::class, [
            'service' => app(CompanyContactService::class),
            'model' => new CompanyContact(),
        ])->handle(new StoreContactDto(
            $request->phone,
            $request->email,
            $request->address,
            $request->time_work,
        ));
    }

    public function destroyContact(CompanyContact $model)
    {
        return app(DestroyContactAction::class, [
            'service' => app(CompanyContactService::class),
            'model' => $model,
        ])->handle();
    }
}
