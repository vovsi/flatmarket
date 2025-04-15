<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('main');

// Login
Route::post('register', [LoginController::class, 'register'])->name('register');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('/signup', [LoginController::class, 'signup'])->name('signup');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePass');

Route::post('/catalog', [CatalogController::class, 'index'])->name('catalog');

Route::get('/contacts', [CompanyController::class, 'contacts'])->name('contacts');

Route::post('/admin-panel', [AdminPanelController::class, 'index'])->name('admin-panel');
