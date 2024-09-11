<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //protected function authenticated(Request $request, $user)
{
    if ($user->role == 'admin') {
        return redirect()->route('admin.dashboard');
    } elseif ($user->role == 'user') {
        return redirect()->route('user.dashboard');
    } elseif ($user->role == 'affiliate') {
        return redirect()->route('affiliate.dashboard');
    }

    return redirect('/login')->with('error', 'Login failed. Role not recognized.');
}

}
