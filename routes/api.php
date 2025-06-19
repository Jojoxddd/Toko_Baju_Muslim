<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/hello', function () {
    return 'API Detected!';

});

Route::get('/user/shop', function () {
    return view('shop');
})->middleware('auth');


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/ping', function () {
    return response()->json(['pong' => true]);
});
