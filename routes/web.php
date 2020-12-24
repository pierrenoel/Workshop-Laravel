<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'create']);

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard',function()
    {
        return view('dashboard.index');
    });

    Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');
    Route::post('/article/create',[ArticleController::class,'store']);

    Route::get('/article/edit/{id}',[ArticleController::class,'edit']);
    Route::put('/article/edit/{id}',[ArticleController::class,'update']);

    Route::delete('/article/delete/{id}',[ArticleController::class,'destroy']);

    Route::get('/logout',[AuthController::class,'logout']);
});

Route::get('/',[ArticleController::class,'index']);
Route::get('/article/show/{id}',[ArticleController::class,'show']);

