<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'showviewLogin'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');


Route::get('/register', [LoginController::class, 'showRegister'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('registerUser');


// Dashboard Route 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


// Profile
Route::get('/profile', [UserController::class, 'showProfile'])->name('profile.index')->middleware('auth');
Route::get('/profile_edit', [UserController::class, 'showProfileEdit'])->name('profile.edit')->middleware('auth');
Route::post('/profile_update/{id}', [UserController::class, 'updateProfile'])->name('update.profile')->middleware('auth');
Route::get('/alamat_edit', [UserController::class, 'showAlamatEdit'])->name('alamat.edit')->middleware('auth');
Route::post('/alamat_update/{id}', [UserController::class, 'updateAlamat'])->name('update.alamat')->middleware('auth');

// Post
Route::get('/post', [PostController::class, 'showPostHome'])->name('post.index')->middleware('auth');


Route::get('/afterRegister', function () {
    return view('auth.afterRegister');
});
