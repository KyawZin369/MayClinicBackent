<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Fix for the PatientController route
Route::get('/patients', [PatientController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login']);