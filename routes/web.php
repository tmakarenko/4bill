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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('/cabinet')->group(function () {
    Route::get('/', [App\Http\Controllers\CabinetController::class, 'index'])->name('cabinet');
    Route::get('/list', [App\Http\Controllers\CabinetController::class, 'list'])->name('cabinetList')->middleware('is.admin');
});

Route::get('/user/{user}/deactivate', [App\Http\Controllers\UserController::class, 'deactivate'])->name('userDeactivate')->middleware('is.admin');
