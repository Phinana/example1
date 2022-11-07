<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

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

Route::get('/home', [GuestController::Class, 'home']);
Route::get('/home/post/{id}', [GuestController::Class, 'show'])->name('home_show');
Route::get('/home/post', [GuestController::Class, 'showAll'])->name('home_show_all');
