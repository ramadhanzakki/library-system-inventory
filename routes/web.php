<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/add', [AddController::class, 'index'])->name('add');
Route::get('/edit', [EditController::class, 'index'])->name('edit');