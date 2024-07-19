<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RolesAndPermissionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view roles_and_permissions|create roles_and_permissions|edit roles_and_permissions|delete roles_and_permissions', ['only' => ['index','show']]);
        $this->middleware('permission:create roles_and_permissions', ['only' => ['create','store']]);
        $this->middleware('permission:edit roles_and_permissions', ['only' => ['edit','update']]);
        $this->middleware('permission:delete roles_and_permissions', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the roles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('rolesandpermissions.index', compact('roles', 'permissions'));
    }

    /**
     * Show the form for creating a new role.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRole()
    {
        return view('rolesandpermissions.createRole');
    }

    /**
     * Store a newly created role in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRole(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles',
            'guard_name' => 'required|string|max:255',
        ]);

        Role::create($request->all());

        return redirect()->route('rolesandpermissions.index')
            ->with('success', 'Rol creado correctamente.');
    }

    /**
     * Show the form for creating a new permission.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPermission()
    {
        return view('rolesandpermissions.createPermission');
    }

    /**
     * Store a newly created permission in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePermission(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:permissions',
            'guard_name' => 'required|string|max:255',
        ]);

        Permission::create($request->all());

        return redirect()->route('rolesandpermissions.index')
            ->with('success', 'Permiso creado correctamente.');
    }

    /**
     * Show the form for editing the specified role.
     *
     * @param  \Spatie\Permission\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function editRole(Role $role)
    {
        return view('rolesandpermissions.editRole', compact('role'));
    }

    /**
     * Update the specified role in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Spatie\Permission\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function updateRole(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $role->id,
            'guard_name' => 'required|string|max:255',
        ]);

        $role->update($request->all());

        return redirect()->route('rolesandpermissions.index')
            ->with('success', 'Rol actualizado correctamente.');
    }

    /**
     * Show the form for editing the specified permission.
     *
     * @param  \Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function editPermission(Permission $permission)
    {
        return view('rolesandpermissions.editPermission', compact('permission'));
    }

    /**
     * Update the specified permission in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function updatePermission(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name,' . $permission->id,
            'guard_name' => 'required|string|max:255',
        ]);

        $permission->update($request->all());

        return redirect()->route('rolesandpermissions.index')
            ->with('success', 'Permiso actualizado correctamente.');
    }

    /**
     * Remove the specified role from storage.
     *
     * @param  \Spatie\Permission\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroyRole(Role $role)
    {
        $role->delete();

        return redirect()->route('rolesandpermissions.index')
            ->with('success', 'Rol eliminado correctamente.');
    }

    /**
     * Remove the specified permission from storage.
     *
     * @param  \Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroyPermission(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('rolesandpermissions.index')
            ->with('success', 'Permiso eliminado correctamente.');
    }
}
