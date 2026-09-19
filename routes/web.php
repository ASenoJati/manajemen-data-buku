<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('/books', BooksController::class)->except(['create', 'edit', 'show']);
Route::resource('/categories', CategoriesController::class)->except(['create', 'edit', 'show']);
