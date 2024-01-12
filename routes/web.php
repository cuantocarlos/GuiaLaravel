<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'dashboard');

Route::get('dashboard', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('posts', [PostController::class, 'store'])->middleware(['auth', 'verified'])->name('posts.store');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->middleware(['auth', 'verified'])->name('posts.destroy');

Route::get('user/{user}', [UserController::class, 'show'])->middleware(['auth', 'verified'])->name('users.show');

require __DIR__.'/auth.php';
