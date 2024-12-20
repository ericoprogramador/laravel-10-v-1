<?php

use App\Http\Controllers\ClienteController;
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
Route::get('/index-cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/criar-cliente', [ClienteController::class, 'criar'])->name('cliente.criar');
Route::get('/mostrar-cliente', [ClienteController::class, 'mostrar'])->name('cliente.mostrar');
Route::post('/store-cliente', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/editar-cliente/{cliente}', [ClienteController::class, 'editar'])->name('cliente.editar');
Route::put('/update-cliente/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');

