<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\adminController;
use App\Http\Controllers\StudentController;


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


Route::get('/students', [StudentController::class,'index']);

Route::get('/students/create', [StudentController::class,'create']);

Route::post('/students/store', [StudentController::class,'store']);

Route::get('/students/edit/{id}', [StudentController::class, 'edit']);
Route::post('/students/update/{id}', [StudentController::class, 'update']);
Route::get('/students/delete/{id}', [StudentController::class, 'destroy']);


use App\Http\Controllers\RoomController;

Route::get('/rooms', [RoomController::class,'index']);
Route::get('/rooms/create', [RoomController::class,'create']);
Route::post('/rooms/store', [RoomController::class,'store']);

Route::get('/rooms/edit/{id}', [RoomController::class,'edit']);
Route::post('/rooms/update/{id}', [RoomController::class,'update']);

Route::get('/rooms/delete/{id}', [RoomController::class,'destroy']);