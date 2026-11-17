<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\BarberLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class BarberLoginController extends Controller
{
    public function showLoginForm(): View
    {
        return view('auth.barber.login');
    }

    public function login(BarberLoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (! Auth::guard('barber')->attempt($credentials, $request->boolean('remember'))) {
            Log::warning('barber.login.failed', [
                'email' => $credentials['email'],
                'ip'    => $request->ip(),
            ]);

            return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => 'Credenciais inválidas.']);
        }

        $request->session()->regenerate();

        return redirect()->intended(route('barber.dashboard'));
    }

    public function logout(): RedirectResponse
    {
        Auth::guard('barber')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('barber.login');
    }
}