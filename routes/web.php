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

//opzione uno invio mail
// Route::get('contacts', 'PageController@contacts')->name('contacts');
// Route::post('contacts', 'PageController@sendContactsForm')->name('contacts.send');


//seconda opzione inio mail

Route::get('contacts', 'ContactController@form')->name('contacts');
Route::post('contacts', 'ContactController@storeAndSend')->name('contacts');

// guest routes 

Route::resource('posts', PostController::class)->only(['index', 'show']);


// admin routes 
// ['register' => false]
Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {

    Route::get('/', 'HomeController@index')->name('dashboard');

    Route::resource('posts', PostController::class);
});
Route::get('listContacts', 'ContactController@contactsList')->name('list');
