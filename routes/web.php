<?php

use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\error;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return error('error_test') . 'lk';
});
