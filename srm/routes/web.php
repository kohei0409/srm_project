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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/institution', [App\Http\Controllers\InstitutionController::class, 'index'])->name('institution');
Route::get('/property', [App\Http\Controllers\PropertyController::class, 'index'])->name('property');
Route::get('/room', [App\Http\Controllers\RoomController::class, 'index'])->name('room');
Route::get('/user', [App\Http\Controllers\User::class, 'index'])->name('user');
