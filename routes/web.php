<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/panel', function () {
    return view('panel.index');
})->name('panel');  // Añadimos el nombre 'panel' a la ruta

//conjunto de rutas basicas para realizacion de cruds
Route::resources([
    'categorias' => CategoriaController::class,
    'productos' => ProductoController::class,
    /*'clientes' => ClienteController::class,
    'proveedores' => ProveedorController::class,
    'compras' => CompraController::class,
    'ventas' => VentaController::class,
    'users' => UserController::class,
    'roles' => RoleController::class,
    'profile' => ProfileController::class*/
]);
