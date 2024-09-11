<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Admin;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('backend.admin.user.index', compact('users'));
    }

    public function create()
    {
        // return view('users.create');
        $formType = 'create';
        return view('backend.admin.user.form', compact('formType'));
    }

    public function store(Request $request)
    {
        $request->validate([

            
            'name' => 'required|string|max:255',
            'role_id' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        User::create($request->all());

        return redirect()->route('admin.users.index')
                         ->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        // return view('users.edit', compact('user'));
        $formType = 'edit';
        return view('backend.admin.user.form', compact('user', 'formType'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
         
            'type' => 'required|string|max:255',
            'identity' => 'required|string|max:255',
        ]);

        $user->update($request->all());

        return redirect()->route('admin.users.index')
                         ->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')
                         ->with('success', 'User deleted successfully.');
    }
}


