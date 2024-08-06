<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudCentrosController;
use App\Http\Controllers\buscadorCentrosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [crudCentrosController::class, 'index'])->name('index');

Route::post('/agregar', [crudCentrosController::class, 'store'])->name('agregar.store');

Route::post('/editar/{id}', [crudCentrosController::class, 'update'])->name('editar.update');

Route::post('/eliminar/{id}', [crudCentrosController::class, 'destroy'])->name('editar.destroy');

Route::get('/buscarCentro', [buscadorCentrosController::class, 'index'])->name('index');

Route::post('/buscarCentro/buscar', [buscadorCentrosController::class, 'show'])->name('show');




/* Route::get('/centro/create', [crudCentrosController::class, 'create'])->name('recuerdo.create'); */