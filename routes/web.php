<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostsController::class, 'index'])->name('posts.index');

Route::group(['prefix'=>'posts'],function (){
    Route::get('/show/{id}', [PostsController::class, 'show'])->name('posts.show');

    Route::group(['middleware'=>'auth'],function (){
        Route::get('/create', [PostsController::class, 'create'])->name('posts.create');
        Route::post('/store', [PostsController::class, 'store'])->name('posts.store');
        Route::get('/delete/{id}', [PostsController::class, 'delete'])->name('posts.delete');
        Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('posts.edit');
        Route::put('/update/{id}', [PostsController::class, 'update'])->name('posts.update');
    });

});

Auth::routes();

