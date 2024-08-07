<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudCentrosController;
use App\Http\Controllers\buscadorCentrosController;
use App\Http\Controllers\FormController;


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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/contactanos', function () {
    return view('contacto');
});

/* Correo */
Route::post('/support', [FormController::class, 'sendSupportForm'])->name('support.send');
Route::post('/recycle-center', [FormController::class, 'sendRecycleCenterForm'])->name('recycle-center.send');

/* Materiales no Convencionales */
Route::view('/materiales', 'MaterialesNoConv')->name('materiales');

/* Crud Centros */
Route::get('/crudCentros', [crudCentrosController::class, 'index'])->name('index');

Route::post('/agregar', [crudCentrosController::class, 'store'])->name('agregar.store');

Route::post('/editar/{id}', [crudCentrosController::class, 'update'])->name('editar.update');

Route::post('/eliminar/{id}', [crudCentrosController::class, 'destroy'])->name('editar.destroy');

/* Buscador Centros */
Route::get('/buscarCentro', [buscadorCentrosController::class, 'index'])->name('index');

Route::post('/buscarCentro/buscar', [buscadorCentrosController::class, 'show'])->name('show');




/* Route::get('/centro/create', [crudCentrosController::class, 'create'])->name('recuerdo.create'); */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
