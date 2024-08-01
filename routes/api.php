<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CategoryController;

Route::get('/category', [CategoryController::class, 'index']);
Route::post('/addCategory', [CategoryController::class, 'addCategory']);
Route::post('/editCategory', [CategoryController::class, 'editCategory']);
Route::get('/deleteCategory/{id}', [CategoryController::class, 'deleteCategory']);
