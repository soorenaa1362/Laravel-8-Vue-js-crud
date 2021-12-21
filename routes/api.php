<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('posts', [PostController::class, 'index']);
Route::group(['prefix' => 'post'], function () {
	Route::post('create', [PostController::class, 'create']);
	Route::get('edit/{id}', [PostController::class, 'edit']);
	Route::post('update/{id}', [PostController::class, 'update']);
	Route::delete('delete/{id}', [PostController::class, 'delete']);
});


Route::get('users', [UserController::class, 'index']);

