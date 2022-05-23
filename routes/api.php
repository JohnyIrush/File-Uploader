<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\File\FileManagerController;
use App\Http\Controllers\User\Task\TaskController;

use App\Http\Controllers\File\FileUploadController;

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


Route::get("tasks", [TaskController::class, "index"]);


Route::post('/upload', [FileUploadController::class, 'store']);
