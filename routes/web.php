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
    return view('home');
});
Route::get('/home', [\App\Http\Controllers\ParcialController::class,  'home'])->name('home');
Route::get('/pagina1', [\App\Http\Controllers\ParcialController::class,  'pagina1'])->name('pagina1');
Route::get('/pagina2', [\App\Http\Controllers\ParcialController::class,  'pagina2'])->name('pagina2');
