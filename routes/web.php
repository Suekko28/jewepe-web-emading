<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [LoginController::class, 'index'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/register', [LoginController::class, 'register'])->name('register.form');
Route::post('/create', [LoginController::class, 'create'])->name('register.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes for authenticated users
Route::middleware(['auth'])->group(function () {
    // The 'login' route was causing a conflict; use 'dashboard' instead
    Route::resource('/dashboard', ArtikelController::class);
    Route::get('/dashboard', [ArtikelController::class, 'index'])->name('dashboard');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/article/{id}/show', [HomeController::class, 'ShowArticle'])->name('article.show');



