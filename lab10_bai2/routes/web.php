<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', [HomeController::class, 'index']);
Route::get('/product', [HomeController::class, 'product']);
Route::get('/news', [HomeController::class, 'news']);
Route::get('/contact', [HomeController::class, 'contact']);
