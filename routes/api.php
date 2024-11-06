<?php

use App\Http\Controllers\Authenticate\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->controller(AuthController::class)->group(function () {
    Route::post('register', 'register')->withoutMiddleware('auth:api');
    Route::post('login', 'login')->withoutMiddleware('auth:api');
    Route::post('logout', 'logout');
    Route::get('profile', 'profile');
    Route::get('refresh', 'refresh');
});
