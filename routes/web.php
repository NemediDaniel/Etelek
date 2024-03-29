<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtelekController;

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

Route::get('etelek', [EtelekController::class, 'index']);
Route::get('uj', [EtelekController::class, 'create'])->name('letrehoz');
Route::post('uj', [EtelekController::class, 'store'])->name('letrehozas');
Route::delete('torles', [EtelekController::class, 'destroy'])->name('elpusztit');