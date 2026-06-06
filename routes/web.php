<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/edit', [EditController::class, 'index'])->name('edit');

Route::controller(AddController::class)->group(function(){
    Route::get('/add', 'index')->name('add');
});

Route::prefix('add')->name('add.')->group(function(){
    Route::get('/', [AddController::class, 'index'])->name('dashboard');
    Route::resource('books', AddController::class)->except('create', 'edit', 'show');
});