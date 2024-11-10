<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/panel', function () {
    return view('panel.index');
})->name('panel');  // Añadimos el nombre 'panel' a la ruta

Route::resource('categorias', CategoriaController::class);
