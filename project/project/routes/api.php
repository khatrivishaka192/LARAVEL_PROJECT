<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiCategoryController;
use App\Http\Controllers\Api\ApiCakeController;

// Categories API
Route::get('/categories', [ApiCategoryController::class, 'index']);
Route::get('/categories/{id}', [ApiCategoryController::class, 'show']);
Route::post('/categories', [ApiCategoryController::class, 'store']);
Route::put('/categories/{id}', [ApiCategoryController::class, 'update']);
Route::delete('/categories/{id}', [ApiCategoryController::class, 'destroy']);

// Cakes API
Route::get('/cakes', [ApiCakeController::class, 'index']);
Route::get('/cakes/{id}', [ApiCakeController::class, 'show']);
Route::post('/cakes', [ApiCakeController::class, 'store']);
Route::put('/cakes/{id}', [ApiCakeController::class, 'update']);
Route::delete('/cakes/{id}', [ApiCakeController::class, 'destroy']);
