<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use	App\Http\Controllers\CommentController;	

Route::get('/', function () {
    return redirect()->route('news.index');
})->name('home');

Route::resource('news', NewsController::class);
Route::post('news/{news}/comments',	[CommentController::class,	'store'])
->name('news.comments.store');	
