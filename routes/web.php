<?php

// use App\Http\Controllers\Admin\ContactController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// pagine connesse al PageController

Route::get('/', 'PageController@index')->name('home');
Route::get('about', 'PageController@about')->name('about');

Route::get('contacts', 'PageController@contacts')->name('contacts');
Route::post('contacts', 'PageController@sendContactsForm')->name('contacts.send');

// guest routes 

Route::resource('posts', PostController::class)->only(['index', 'show']);


// admin routes 
// ['register' => false]
Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {

    Route::get('/', 'HomeController@index')->name('dashboard');

    Route::resource('posts', PostController::class);
});
