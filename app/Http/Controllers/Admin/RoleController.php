<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('backend.admin.role.index', compact('roles'));
    }

    public function create()
    {
        // return view('roles.create');
        $formType = 'create';
        return view('backend.admin.role.form', compact('formType'));
    }

    public function store(Request $request)
    {
        $request->validate([

            
            'type' => 'required|string|max:255',
            'identity' => 'required|string|max:255',
        ]);

        Role::create($request->all());

        return redirect()->route('admin.roles.index')
                         ->with('success', 'Role created successfully.');
    }

    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    public function edit(Role $role)
    {
        // return view('roles.edit', compact('role'));
        $formType = 'edit';
        return view('backend.admin.role.form', compact('role', 'formType'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
         
            'type' => 'required|string|max:255',
            'identity' => 'required|string|max:255',
        ]);

        $role->update($request->all());

        return redirect()->route('admin.roles.index')
                         ->with('success', 'Role updated successfully.');
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('admin.roles.index')
                         ->with('success', 'Role deleted successfully.');
    }
}


