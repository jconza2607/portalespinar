<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Limpiar caché de permisos
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Crear permisos
        $permissions = [
            'ver modulo',
            'editar modulo',
            'administrar permisos', // Este permiso es necesario para acceder a la gestión
            'administrar usuarios',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Crear roles y asignar permisos
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->givePermissionTo(Permission::all()); // Dar todos los permisos al rol admin

        $userRole = Role::firstOrCreate(['name' => 'usuario']);
        $userRole->givePermissionTo('ver modulo'); // Permiso limitado para usuarios

        // Asignar el rol de admin a un usuario específico
        $adminUser = User::first(); // Asegúrate de que tienes al menos un usuario creado
        if ($adminUser) {
            $adminUser->assignRole($adminRole);
        }
    }
}

