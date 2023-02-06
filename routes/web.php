<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;



Route::get('/', [PagesController::class, 'index']);
Route::get('about', [PagesController::class, 'about']);
Route::get('services', [PagesController::class, 'services']);
Route::resource('posts', PostsController::class);

//Route::get('create',[PostsController::class,'create']);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


