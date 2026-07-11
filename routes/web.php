<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\adminController;

Route::get('/', function () {
    return redirect('/register');
});

// Register
Route::match(['get','post'], '/register', [Authentication::class,'register']);

// Login
Route::match(['get','post'], '/login', [Authentication::class,'login']);

// Dashboard
Route::get('/dashboard', [Authentication::class,'dashboard'])->name('dashboard')->middleware('checklogin');

// Logout
Route::get('/logout', [Authentication::class,'logout']);
Route::get('/adminDashboard',[adminController::class,'adminDashboard']);