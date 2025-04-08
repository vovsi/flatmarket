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

Route::post('/login', [LoginController::class, 'index'])->name('login');
Route::post('/signup', [LoginController::class, 'signup'])->name('signup');

Route::post('/catalog', [CatalogController::class, 'index'])->name('catalog');

Route::post('/contacts', [CompanyController::class, 'contacts'])->name('contacts');

Route::post('/admin-panel', [AdminPanelController::class, 'index'])->name('admin-panel');

Route::post('/profile', [ProfileController::class, 'index'])->name('profile');
