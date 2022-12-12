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


Route::get('/home', [App\Http\Controllers\InstitutionController::class, 'index'])->name('home');

Route::get('/detail/{id}', [App\Http\Controllers\InstitutionController::class, 'detail'])->name('detail');
Route::get('/edit/{id}', [App\Http\Controllers\InstitutionController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [App\Http\Controllers\InstitutionController::class, 'delete'])->name('delete');

Route::get('/search', [App\Http\Controllers\InstitutionController::class, 'search'])->name('search');
Route::get('/property', [App\Http\Controllers\PropertyController::class, 'index'])->name('property');
Route::get('/room', [App\Http\Controllers\RoomController::class, 'index'])->name('room');
Route::get('/user', [App\Http\Controllers\User::class, 'index'])->name('user');
