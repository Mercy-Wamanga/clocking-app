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

//Route::get('/login', [UserAuthController::class, 'login'])->name('login');
Route::get('/login', 'AuthController@getLogin');

Route::post('/login', 'AuthController@postLogin')->name('login');

Route::post('/addUser', 'AuthController@postUser');



Route::get('/users', function () {
    return view('users');
});


Route::get('/logout', function () {
    return view('welcome');
});


Route::get('dashboard-users', function () {
    return view('dashboard-users');
});

Route::get('dashboard-reports', function () {
    return view('dashboard-report');
});

Route::resource('/dashboard-users/time','TimeController'); 