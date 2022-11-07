<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

    Route::get('/', function () {
        return view('welcome');
    });
    
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('home/show/{id}', [App\Http\Controllers\PostCommentController::class, 'index'])->name('show.post');
    Route::get('home/editpost', [App\Http\Controllers\PostController::class, 'index'])->name('edit.post');
    Route::get('home/storepost', [App\Http\Controllers\PostController::class, 'store'])->name('store.post');

    Route::get('home/editcomment/{id}', [App\Http\Controllers\CommentController::class, 'index'])->name('edit.comment');
    Route::get('home/storecomment/{id}', [App\Http\Controllers\CommentController::class, 'store'])->name('store.comment');

});

