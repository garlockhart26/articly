<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post;
use App\Http\Controllers\PostTagController;
use App\Http\Controllers\PostCategoryController;

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

Route::group(['prefix' => 'master', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::group(['middleware' => ['role:Administrator']], function () {
        Route::resource('/post-category', PostCategoryController::class);
        Route::resource('/post-tag', PostTagController::class);
        Route::resource('/post', PostController::Class);
    });
});