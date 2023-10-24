<?php

use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('citas',[CitaController::class, 'index'])->name('citas.index');
Route::get('citas/create',[CitaController::class, 'create'])->name('citas.create');
Route::get('citas/{cita}',[CitaController::class, 'show'])->name('citas.show');


