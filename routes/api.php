<?php

use App\Http\Controllers\Api\FileController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\PariwarikController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('/image',ImageController::class);
Route::apiResource('/file',FileController::class);
Route::apiResource('/post',PostController::class);
Route::apiResource('/tasbir',PariwarikController::class);