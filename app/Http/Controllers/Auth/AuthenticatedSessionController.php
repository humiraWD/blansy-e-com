<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
  /**
   * Display the login view.
   */
  public function create(): View
  {
    return view('content.authentications.auth-login-basic');
  }

  /**
   * Handle an incoming authentication request.
   */
  public function store(LoginRequest $request): RedirectResponse
  {
    $request->authenticate();

    $request->session()->regenerate();

    if (Auth::user()->type === 'user') {
      return redirect('/');
    } elseif (Auth::user()->type === 'affiliate') {
      // return redirect('/affiliate-dashboard');
      return redirect('/affiliate/dashboard');
    } else {
      // return redirect('/admin-dashboard');
      return redirect('/admin/dashboard');
    }
  }

  /**
   * Destroy an authenticated session.
   */
  public function destroy(Request $request): RedirectResponse
  {
    $type = (Auth::user()->type === 'user') ? 'user' : ((Auth::user()->type === 'affiliate') ? 'affiliate' : 'admin');

    Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();


    if ($type === 'user') {
      return redirect('/login');
    } elseif ($type === 'affiliate') {
      // return redirect('/affiliate-login');
      return redirect('/affiliate/login');
    } else {
      // return redirect('/admin-login');
      return redirect('/admin/login');
    }
  }
}
