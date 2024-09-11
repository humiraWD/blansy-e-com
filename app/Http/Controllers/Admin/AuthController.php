<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
  /**
   * Display the login view.
   */
  public function create(): View
  {
    if (Auth::check()) {
      if (Auth::user()->type === 'user') {
        return redirect()->route('user.dashboard');
      } elseif (Auth::user()->type === 'affiliate') {
        return redirect()->route('affiliate.dashboard');
      } elseif (Auth::user()->type === 'admin') {
        return redirect()->route('admin.dashboard');
      }
    }
    return view('backend.admin.auth.login');
  }

  /**
   * Handle an incoming authentication request.
   */
  public function store(LoginRequest $request): RedirectResponse
  {
    $user = User::where('email', $request->email)->first();

    if ($user && $user->type !== 'admin') {
      throw ValidationException::withMessages([
        'email' => trans('auth.failed'),
      ]);
    }

    $request->authenticate();

    $request->session()->regenerate();

    return redirect('/admin/dashboard');
  }

  /**
   * Destroy an authenticated session.
   */
  public function destroy(Request $request): RedirectResponse
  {
    Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('admin.login');
  }
}
