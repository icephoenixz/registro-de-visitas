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

Auth::routes();

Route::get('/pruebas', [App\Http\Controllers\UserController::class, 'pruebas'])->name('pruebasweb');


Route::get('/{any?}',[App\Http\Controllers\PageController::class, 'index'])->where('any', '.*');