<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;

Route::get('/',[HomeController::class,'home']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[AdminController::class,'home'] )->name('dashboard');

    Route::get('/add-category',[AdminController::class,'addCategory'] )->name('add-category');
    Route::get('/new-category',[AdminController::class,'newCategory'] )->name('new-blog-category');
    Route::get('/manage-category',[AdminController::class,'manageCategory'] )->name('manage-category');
    Route::get('/edit-category/{id}',[AdminController::class,'editCategory'] )->name('edit-category');
    Route::get('/delete-category/{id}',[AdminController::class,'destroyCategory'] )->name('delete-category');
    Route::post('/update-category/{id}',[AdminController::class,'update'] )->name('update-category');

//    blog

    Route::get('/add-blog',[BlogController::class,'addBlog'] )->name('add-blog');
    Route::post('/new-blog',[BlogController::class,'newBlog'] )->name('new-blog');
    Route::get('/manage-blog',[BlogController::class,'manageBlog'] )->name('manage-blog');

});
