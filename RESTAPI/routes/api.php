<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\PostController;
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
Route::post('/add-post',[PostController::class,'addPostAPI']);
Route::get('/posts',[PostController::class,'getPosts']);
Route::get('/post/{id}',[PostController::class,'getPostById']);
Route::put('/update-post/{id}',[PostController::class,'updatePost']);
Route::delete('/delete-post/{id}',[PostController::class,'deletePost']);