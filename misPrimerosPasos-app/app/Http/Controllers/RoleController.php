<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function indexUsersRoles()
    {
        $users = User::with('roles')->get();
        return view('roles.index_users_roles', compact('users'));
    }

    public function indexRolesPermissions()
    {
        $roles = Role::with('permissions')->get();
        return view('roles.index_roles_permissions', compact('roles'));
    }

    public function assignRolesForm()
    {
        $users = User::all();
        $roles = Role::all();
        return view('roles.assign_roles', compact('users', 'roles'));
    }

    public function assignRoles(Request $request)
    {
        $user = User::findOrFail($request->input('user_id'));
        $roles = $request->input('roles', []);

        $roleNames = Role::whereIn('id', $roles)->pluck('name')->toArray();
        $user->syncRoles($roleNames);

        return redirect()->route('roles.assign.form')
            ->with('success', 'Roles asignados exitosamente.');
    }

    public function managePermissionsForm()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('roles.manage_permissions', compact('roles', 'permissions'));
    }

    public function managePermissions(Request $request)
    {
        $role = Role::findOrFail($request->input('role_id'));
        $permissions = $request->input('permissions', []);

        $role->syncPermissions($permissions);

        return redirect()->route('roles.permissions.form')
            ->with('success', 'Permisos asignados exitosamente.');
    }

    public function editRoles($id)
    {
        $user = User::with('roles')->findOrFail($id);
        $roles = Role::all();
        return view('roles.edit_roles', compact('user', 'roles'));
    }

    public function updateRoles(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $roles = $request->input('roles', []);

        // Obtenemos los nombres de los roles basados en los IDs
        $roleNames = Role::whereIn('id', $roles)->pluck('name')->toArray();

        // Asignamos los roles al usuario
        $user->syncRoles($roleNames);

        return redirect()->route('roles.users.index')
            ->with('success', 'Roles actualizados exitosamente.');
    }

}
