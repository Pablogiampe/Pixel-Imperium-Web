<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\Auth\RegisterController;



Route::get('/contacto', [ContactoController::class, 'showContacto'])->name('contacto');
Route::get('/', [InicioController::class, 'showInicio'])->name('inicio');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'processLogin'])->name('login');

Route::post('/login', [LoginController::class, 'processLogin'])->name('login');

Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros.index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('registro');
Route::post('/register', [AuthController::class, 'register'])->name('registro');

Route::post('/resultado', [FormularioController::class, 'resultado'])->name('formulario.resultado');
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

//amb
Route::get('/abm', [ProductoController::class, 'abm'])->name('productos.abm');

Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
    
// Ruta para almacenar el nuevo producto en la base de datos
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

// Ruta para mostrar el formulario de edición de un producto existente
Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');

// Ruta para actualizar un producto existente en la base de datos
Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');

// Ruta para eliminar un producto existente de la base de datos
Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');
;