<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', [UserController::class, 'index'])->name('users.index');
Route::get('create', [UserController::class, 'create'])->name('users.create');
Route::post('store', [UserController::class, 'store'])->name('users.store');
Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('update/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('delete/{id}', [UserController::class, 'delete'])->name('users.delete');

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::post('posts/update/{id}', [PostController::class, 'update'])->name('posts.update');
Route::get('posts/delete/{id}', [PostController::class, 'delete'])->name('posts.delete');
