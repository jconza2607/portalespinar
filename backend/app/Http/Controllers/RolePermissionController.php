<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    // Listar roles y permisos
    public function index()
    {
        $roles = Role::with('permissions')->get(); // Cargar roles con sus permisos
        $permissions = Permission::all(); // Obtener todos los permisos

        return view('permissions.index', compact('roles', 'permissions'));
    }

    // Mostrar formulario para crear un rol
    public function create()
    {
        $permissions = Permission::all(); // Obtener todos los permisos
        return view('permissions.create', compact('permissions'));
    }

    // Guardar un nuevo rol
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
            'permissions' => 'nullable|array',
        ]);

        // Crear el rol con guard_name 'web'
        $role = Role::create([
            'name' => $request->name,
            'guard_name' => 'web',
        ]);

        if ($request->permissions) {
            // Crear o buscar los permisos con guard_name 'web'
            foreach ($request->permissions as $permissionName) {
                Permission::firstOrCreate([
                    'name' => $permissionName,
                    'guard_name' => 'web', 
                ]);
            }

            // Sincronizar los permisos con el rol
            $role->syncPermissions($request->permissions);
        }

        return redirect()->route('permissions.index')->with('success', 'Rol creado exitosamente.');
    }



    // Mostrar formulario para editar un rol
    public function edit(Role $role)
    {
        $permissions = Permission::all(); // Obtener todos los permisos
        $rolePermissions = $role->permissions->pluck('id')->toArray(); // Permisos del rol actual

        return view('permissions.edit', compact('role', 'permissions', 'rolePermissions'));
    }

    // Actualizar un rol
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id,
            'permissions' => 'nullable|array',
        ]);

        $role->update(['name' => $request->name]); // Actualizar nombre del rol
        $role->syncPermissions($request->permissions ?? []); // Sincronizar permisos

        return redirect()->route('permissions.index')->with('success', 'Rol actualizado correctamente.');
    }

    // Eliminar un rol
    public function destroy(Role $role)
    {
        $role->delete(); // Eliminar el rol
        return redirect()->route('permissions.index')->with('success', 'Rol eliminado correctamente.');
    }

    // Crear permisos (opcional)
    public function createPermission()
    {
        return view('permissions.create_permission');
    }

    public function storePermission(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name',
        ]);

        Permission::create([
            'name' => $request->name,
            'guard_name' => 'web', // Establecer guard_name como 'web'
        ]);

        return redirect()->route('permissions.index')->with('success', 'Permiso creado exitosamente.');
    }

    // Eliminar un permiso (opcional)
    public function destroyPermission(Permission $permission)
    {
        $permission->delete(); // Eliminar permiso
        return redirect()->route('permissions.index')->with('success', 'Permiso eliminado correctamente.');
    }
}
