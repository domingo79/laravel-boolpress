<?php

// use App\Http\Controllers\PostController;
use Illuminate\Routing\RouteGroup;
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

// gust routes 
Route::get('/', function () {
    return view('guest.welcome');
});
Route::resource('Posts', PostController::class)->only(['index', 'show']);

// admin routes 

Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {

    Route::get('/', 'HomeController@index')->name('dashboard');

    Route::resource('posts', PostController::class);
});
