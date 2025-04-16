<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        auth('user')->logout();
        auth('donor')->logout();
        auth('hospital')->logout();
        auth('blood_bank')->logout();
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        auth('user')->logout();
        auth('donor')->logout();
        auth('hospital')->logout();
        auth('blood_bank')->logout();

        $request->authenticate();

        $request->session()->regenerate();

        // dd($request->session()->all());

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        
         auth('user')->logout();
         auth('donor')->logout();
         auth('hospital')->logout();
         auth('blood_bank')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}
