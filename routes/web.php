<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController ;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("posts",PostsController::class)->middleware("auth");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
