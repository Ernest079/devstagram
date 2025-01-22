<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('principal');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::middleware('auth')->group(function (){
    Route::get('/editar-perfil', [PerfilController::class, 'index'])->name('perfil.index');
    Route::post('/editar-perfil', [PerfilController::class, 'store'])->name('perfil.store');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::post('/{user:username}/posts/{post}', [ComentarioController::class, 'store'])->name('comentarios.store');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    //LIKES
    Route::post('/posts/{post}/likes', [LikeController::class, 'store'])->name('posts.likes.store');
    Route::delete('/posts/{post}/likes', [LikeController::class, 'destroy'])->name('posts.likes.destroy');
    // PERFIL

});
Route::get('/{user:username}', [PostController::class, 'index'])->name('post.index');

Route::get('/{user:username}/posts/{post}', [PostController::class, 'show'])->name('posts.show');


Route::post('/imagenes', [ImageController::class, 'store'])->name('imagenes.store');


// Route::resource('posts',PostController::class)->except(['index', 'store']);
