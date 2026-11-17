<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\CustomerLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class CustomerLoginController extends Controller
{
    public function showLoginForm(): View
    {
        return view('auth.customer.login');
    }

    public function login(CustomerLoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (! Auth::guard('customer')->attempt($credentials, $request->boolean('remember'))) {
            Log::warning('customer.login.failed', [
                'email' => $credentials['email'],
                'ip'    => $request->ip(),
            ]);

            return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => 'Credenciais inválidas.']);
        }

        $request->session()->regenerate();

        return redirect()->intended(route('customer.dashboard'));
    }

    public function logout(): RedirectResponse
    {
        Auth::guard('customer')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('customer.login');
    }
}