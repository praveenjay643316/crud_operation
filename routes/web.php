<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-post',[PostController::class,'addPost'])->name('post.add');
//Route::get('/add-post', 'App\Http\Controllers\PostController@addPost')->name('post.add');
Route::post('/add-post', 'App\Http\Controllers\PostController@savePost')->name('save.post');
Route::get('/post-list', 'App\Http\Controllers\PostController@postList')->name('post.list');
Route::get('/edit-list/{id}', 'App\Http\Controllers\PostController@editList')->name('post.edit');
Route::get('/delete-list/{id}', 'App\Http\Controllers\PostController@deleteList')->name('post.delete');
Route::post('/update-list', 'App\Http\Controllers\PostController@updateList')->name('update.post');

