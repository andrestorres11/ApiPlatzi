<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('v1/posts', App\Http\Controllers\Api\V1\PostController::class)
->only(['index', 'show', 'destroy'])
->middleware('auth:sanctum');

Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login']);