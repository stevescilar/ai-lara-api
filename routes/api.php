<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello, World!']);
});

//API Version 1 Routes
Route::prefix('v1')->group(function () {
    Route::apiResource('posts', PostController::class); // Registers standard RESTful routes for Post resource
});
