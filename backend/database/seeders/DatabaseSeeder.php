<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesAndPermissionsSeeder::class);

            // Crear usuario administrador
        $admin = User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        // Crear usuario regular
        $user = User::factory()->create([
            'name' => 'Usuario',
            'email' => 'usuario@example.com',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole('usuario');
        }
}
