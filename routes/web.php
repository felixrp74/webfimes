<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/',  [PostController::class, 'index'])->name('posts.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get( 'tag/{tag}', [PostController::class, 'tag'] )->name('posts.tag');

Route::get( 'category/{category}', [PostController::class, 'category'] )->name('posts.category');


Route::get( 'mecanica', [PostController::class, 'inicio'] )->name('mecanica.inicio');
Route::get( 'electronica', [PostController::class, 'electronica'] )->name('electronica.inicio');
Route::get( 'sistemas', [PostController::class, 'sistemas'] )->name('sistemas.inicio');
Route::get( 'general', [PostController::class, 'general'] )->name('general.inicio');
Route::get( 'responsable', [PostController::class, 'responsable'] )->name('responsable.inicio');


// Route::get( 'category/ingenieria-mecanica', [PostController::class, 'sistemas'] )->name('sistemas.inicio');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

