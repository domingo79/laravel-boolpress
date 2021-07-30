<?php

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\PostResource;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('posts', 'API\PostController@index');


//restituire una singola risorsa(post)
Route::get('posts/{post}', function (Post $post) {
    return new PostResource(Post::find($post));
});
