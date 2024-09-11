<?php

namespace App\Http\Controllers\Affiliate;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
  /**
   * Display the registration view.
   */
  public function create(): View
  {
    return view('backend.affiliate.auth.register');
  }

  /**
   * Handle an incoming registration request.
   *
   * @throws \Illuminate\Validation\ValidationException
   */
  public function store(RegisterRequest $request): RedirectResponse
  {
    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'type' => 'affiliate',
      'status' => 0,
    ]);

    event(new Registered($user));

    Auth::login($user);

    return redirect('/affiliate/dashboard');
  }
}
