<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('vistauno', 'App\Http\Controllers\micontrolador@vista1');
Route::get('vistados', 'App\Http\Controllers\micontrolador@vista2');
Route::get('vistatres', 'App\Http\Controllers\micontrolador@vista3');

Route::get('registrarlibro', 'App\Http\Controllers\micontrolador@registralibro')->name('registrarlibro');
Route::post('guardarlibro', 'App\Http\Controllers\micontrolador@guardarlibro')->name('guardarlibro');

Route::get('consultalibros', 'App\Http\Controllers\micontrolador@consultalibros')->name('consultalibros');
Route::get('eliminar/{id}', 'App\Http\Controllers\micontrolador@eliminarLibro')->name('eliminarlibro');

Route::get('muestra/{id}', 'App\Http\Controllers\micontrolador@muestraLibro')->name('muestralibro');
Route::POST('editar/{id}', 'App\Http\Controllers\micontrolador@editalibro')->name('editarlibro');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();