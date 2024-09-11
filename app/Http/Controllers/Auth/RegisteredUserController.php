<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Route;

class RegisteredUserController extends Controller
{
  /**
   * Display the registration view.
   */
  public function create(): View
  {
    return view('content.authentications.auth-register-basic');
  }

  /**
   * Handle an incoming registration request.
   *
   * @throws \Illuminate\Validation\ValidationException
   */
  public function store(RegisterRequest $request): RedirectResponse
  {
    //check route for set user type
    $type = Route::currentRouteName('register') ? 'user' : (Route::currentRouteName('affiliate.register') ? 'affiliate' : 'admin');

    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'type' => $type
    ]);

    event(new Registered($user));

    Auth::login($user);

    if ($type === 'user') {
      return redirect('/');
    } elseif ($type === 'affiliate') {
      return redirect('/affiliate/dashboard');
    } else {
      return redirect('/admin/dashboard');
    }
  }
}
