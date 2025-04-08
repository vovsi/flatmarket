<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('main');
Route::post('/login', [LoginController::class, 'login'])->name('login');
