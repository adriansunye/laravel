<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* 
Route::get('/more', [PostController::class, 'index'])->name('posts.index');
Route::get('/more/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/more', [PostController::class, 'store'])->name('posts.store');

Route::get('/more/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/more/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('/more/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/more/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
 */
Route::resource('more', PostController::class, [
    'names' => 'posts',
    'parameters' => ['more' => 'post']
]);
Route::view('/', 'home' )->name('home');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

