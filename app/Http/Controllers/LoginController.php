<?php

namespace App\Http\Controllers;

use App\Actions\Login\LoginAction;
use App\Actions\Login\LogoutAction;
use App\Actions\Login\RegisterAction;
use App\Actions\Login\SignupAction;
use App\Components\DTO\Login\LoginDto;
use App\Components\DTO\Login\RegisterDto;
use App\Http\Requests\Login\LoginRequest;
use App\Http\Requests\Login\RegisterRequest;
use App\Models\User;
use App\Services\Controllers\Login\LoginService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    /**
     * @return View
     * @throws Exception
     */
    public function signup(): View
    {
        return app(SignupAction::class)->handle();
    }

    /**
     * @param RegisterRequest $request
     * @return Response|RedirectResponse
     * @throws Exception
     */
    public function register(RegisterRequest $request): Response|RedirectResponse
    {
        return app(RegisterAction::class, [
            'service' => app(LoginService::class),
            'model' => new User(),
        ])->handle(new RegisterDto(
            $request->name ?? null,
            $request->email ?? null,
            $request->password ?? null,
            $request->password_confirmation ?? null,
        ));
    }

    public function login(LoginRequest $request)
    {
        return app(LoginAction::class, [
            'service' => app(LoginService::class),
        ])->handle(new LoginDto(
            $request->email ?? null,
            $request->password ?? null,
        ));
    }

    public function logout(): RedirectResponse
    {
        return app(LogoutAction::class, [
            'service' => app(LoginService::class),
        ])->handle();
    }
}
