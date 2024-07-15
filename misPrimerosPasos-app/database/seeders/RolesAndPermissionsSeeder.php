<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        Permission::create(['name' => 'view all data']);
        Permission::create(['name' => 'edit data']);
        Permission::create(['name' => 'create data']);
        Permission::create(['name' => 'delete data']);
        Permission::create(['name' => 'view own data']);

        // Create roles and assign permissions
        $admin = Role::create(['name' => 'Administrador']);
        $admin->givePermissionTo(Permission::all());

        $auditor = Role::create(['name' => 'Auditor']);
        $auditor->givePermissionTo('view all data');

        $profesor = Role::create(['name' => 'Profesor']);
        $profesor->givePermissionTo(['view all data', 'edit data']);

        $asistente = Role::create(['name' => 'Asistente']);
        $asistente->givePermissionTo(['view all data']);

        $tutor = Role::create(['name' => 'Tutor']);
        $tutor->givePermissionTo('view own data');
    }
}
