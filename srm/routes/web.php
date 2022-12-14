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
//Route::get('/', function () {
//    return view('auth.login');
//});


Route::get('/', function () {
    return view('auth.login');
});

//Auth::routes();
Auth::routes([
    'register' => false // ユーザ登録機能をオフに切替
]);

Route::group(['middleware' => 'auth'], function() {
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@getRegister')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@postRegister')->name('register');
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\InstitutionController::class, 'index'])->name('home');

Route::get('/detail/{id}', [App\Http\Controllers\InstitutionController::class, 'detail'])->name('detail');
Route::get('/edit/{id}', [App\Http\Controllers\InstitutionController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [App\Http\Controllers\InstitutionController::class, 'delete'])->name('delete');

Route::get('/search', [App\Http\Controllers\InstitutionController::class, 'search'])->name('search');
Route::get('/property', [App\Http\Controllers\PropertyController::class, 'index'])->name('property');
Route::get('/room', [App\Http\Controllers\RoomController::class, 'index'])->name('room');

Route::get('/users', [App\Http\Controllers\UsersListController::class, 'index'])->name('users');
