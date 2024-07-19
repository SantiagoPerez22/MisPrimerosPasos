<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $controllers = [
            'user',
            'persona',
            'domicilio',
            'role',
            'sala',
            'nivel',
            'nucleo',
            'ambito',
            'condicion',
            'tutor_alumno',
            'alergia',
            'enfermedad',
            'roles_and_permissions',
            'informe_diario',
            'informe_semanal',
            'clase',
            'asistencia',
            'observacion'
        ];

        foreach ($controllers as $controller) {
            Permission::create(['name' => "view $controller"]);
            Permission::create(['name' => "create $controller"]);
            Permission::create(['name' => "edit $controller"]);
            Permission::create(['name' => "delete $controller"]);
        }

        $admin = Role::create(['name' => 'Administrador']);
        $admin->givePermissionTo(Permission::all());

        $profesor = Role::create(['name' => 'Profesor']);
        $profesor->givePermissionTo([
            'view user', 'create user', 'edit user',
            'view persona', 'create persona', 'edit persona',
            'view domicilio', 'create domicilio', 'edit domicilio',
            'view role', 'create role', 'edit role',
            'view sala', 'create sala', 'edit sala',
            'view nivel', 'create nivel', 'edit nivel',
            'view nucleo', 'create nucleo', 'edit nucleo',
            'view ambito', 'create ambito', 'edit ambito',
            'view condicion', 'create condicion', 'edit condicion',
            'view tutor_alumno', 'create tutor_alumno', 'edit tutor_alumno',
            'view alergia', 'create alergia', 'edit alergia',
            'view enfermedad', 'create enfermedad', 'edit enfermedad',
            'view roles_and_permissions', 'create roles_and_permissions', 'edit roles_and_permissions',
            'view informe_diario', 'create informe_diario', 'edit informe_diario',
            'view informe_semanal', 'create informe_semanal', 'edit informe_semanal',
            'view clase', 'create clase', 'edit clase',
            'view asistencia', 'create asistencia', 'edit asistencia',
            'view observacion', 'create observacion', 'edit observacion'
        ]);

        $asistente = Role::create(['name' => 'Asistente']);
        $asistente->givePermissionTo([
            'view user',
            'view persona',
            'view domicilio',
            'view role',
            'view sala',
            'view nivel',
            'view nucleo',
            'view ambito',
            'view condicion',
            'view tutor_alumno',
            'view alergia',
            'view enfermedad',
            'view roles_and_permissions',
            'view informe_diario',
            'view informe_semanal',
            'view clase',
            'view asistencia',
            'view observacion'
        ]);

        $tutor = Role::create(['name' => 'Tutor']);
        $tutor->givePermissionTo([
            'view persona',
            'view informe_diario',
            'view informe_semanal',
            'view clase',
            'view asistencia',
            'view observacion'
        ]);

        $auditor = Role::create(['name' => 'Auditor']);
        $auditor->givePermissionTo([
            'view user',
            'view persona',
            'view domicilio',
            'view role',
            'view sala',
            'view nivel',
            'view nucleo',
            'view ambito',
            'view condicion',
            'view tutor_alumno',
            'view alergia',
            'view enfermedad',
            'view roles_and_permissions',
            'view informe_diario',
            'view informe_semanal',
            'view clase',
            'view asistencia',
            'view observacion'
        ]);
    }
}
