<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CompanyContactController;
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

// Contacts
Route::get('/contacts', [CompanyContactController::class, 'index'])->name('contacts.index');

// Catalog
Route::post('/catalog', [CatalogController::class, 'index'])->name('catalog.index');

Route::middleware(['auth'])->group(function () {
    // Login
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update-password');

    // Admin-panel (it is desirable to put it in a module)
    Route::get('/admin-panel/contacts', [AdminPanelController::class, 'contacts'])->name('admin.contacts.index');
    Route::post('/admin-panel/store-contact', [AdminPanelController::class, 'storeContact'])->name('admin.contacts.store');
    Route::delete('/admin-panel/destroy-contact/{model}', [AdminPanelController::class, 'destroyContact'])->name('admin.contacts.destroy');
    Route::get('/admin-panel/users', [AdminPanelController::class, 'users'])->name('admin.users.index');
});
