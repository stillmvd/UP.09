<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;

//Страничность
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/registration', [MainController::class, 'registration'])->name('registration');
Route::get('/cabinet', [MainController::class, 'cabinet'])->name('cabinet');
Route::get('/logout', [MainController::class, 'logout'])->name('logout');

Route::post('/login', [App\Http\Controllers\UserController::class, 'login']);
Route::post('/registration', [App\Http\Controllers\UserController::class, 'registrate']);

//Посты
Route::get('/', [PostController::class, 'posts'])->name('posts');
Route::get('/add', [PostController::class, 'create'])->name('create');
Route::post('/add', [PostController::class, 'store'])->name('store');
