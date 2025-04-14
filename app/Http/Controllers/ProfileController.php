<?php

namespace App\Http\Controllers;

use App\Actions\Profile\ProfileAction;
use App\Actions\Profile\UpdateAction;
use App\Actions\Profile\UpdatePasswordAction;
use App\Components\DTO\Profile\UpdateDto;
use App\Components\DTO\Profile\UpdatePasswordDto;
use App\Http\Requests\Profile\UpdatePasswordRequest;
use App\Http\Requests\Profile\UpdateRequest;
use App\Services\Controllers\Profile\ProfileService;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return app(ProfileAction::class, [
            'service' => app(ProfileService::class),
        ])->handle();
    }

    public function update(UpdateRequest $request)
    {
        return app(UpdateAction::class, [
            'service' => app(ProfileService::class),
            'model' => Auth::user(),
        ])->handle(new UpdateDto(
            $request->name ?? null,
            $request->email ?? null,
        ));
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        return app(UpdatePasswordAction::class, [
            'service' => app(ProfileService::class),
            'model' => Auth::user(),
        ])->handle(new UpdatePasswordDto(
            $request->password ?? null,
            $request->password_confirmation ?? null,
        ));
    }
}
