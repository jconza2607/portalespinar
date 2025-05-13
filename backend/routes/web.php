<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí puedes registrar las rutas web para tu aplicación. Estas rutas
| se cargan por el RouteServiceProvider y todas están asignadas al grupo
| "web" middleware. ¡Haz algo grandioso!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Ruta del dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rutas del módulo con permisos
    Route::get('/modulo', [ModuloController::class, 'index'])
        ->middleware('permission:ver modulo')
        ->name('modulo.index');

    Route::get('/modulo/editar', [ModuloController::class, 'edit'])
        ->middleware('permission:editar modulo')
        ->name('modulo.edit');

    // Rutas para la gestión de roles y permisos
    Route::prefix('permissions')->middleware('permission:administrar permisos')->group(function () {
        // Roles
        Route::get('/', [RolePermissionController::class, 'index'])->name('permissions.index'); // Listar roles y permisos
        Route::get('/create', [RolePermissionController::class, 'create'])->name('permissions.create'); // Crear rol
        Route::post('/', [RolePermissionController::class, 'store'])->name('permissions.store'); // Guardar rol
        Route::get('/{role}/edit', [RolePermissionController::class, 'edit'])->name('permissions.edit'); // Editar rol
        Route::put('/{role}', [RolePermissionController::class, 'update'])->name('permissions.update'); // Actualizar rol
        Route::delete('/{role}', [RolePermissionController::class, 'destroy'])->name('permissions.destroy'); // Eliminar rol

        // Permisos
        Route::get('/create-permission', [RolePermissionController::class, 'createPermission'])->name('permissions.create_permission'); // Crear permiso
        Route::post('/store-permission', [RolePermissionController::class, 'storePermission'])->name('permissions.store_permission'); // Guardar permiso
        Route::delete('/{permission}/delete', [RolePermissionController::class, 'destroyPermission'])->name('permissions.destroy_permission'); // Eliminar permiso
    });

    // Rutas para la gestión de usuarios
    Route::prefix('users')->middleware('permission:administrar usuarios')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index'); // Listar usuarios
        Route::get('/create', [UserController::class, 'create'])->name('users.create'); // Formulario de creación
        Route::post('/', [UserController::class, 'store'])->name('users.store'); // Guardar usuario
    });
});
