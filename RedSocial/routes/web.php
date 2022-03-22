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
    return view('verify');
})->middleware('auth');

Auth::routes();

Route::get('/verify', [App\Http\Controllers\ProfilesController::class, 'index'])->name('verify');
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
