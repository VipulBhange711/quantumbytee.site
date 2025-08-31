<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/me', function () {
    return view('dasbhoard');
});


Route::get('/melogin', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboards (protected by role middleware)
Route::middleware(['auth', 'role:student'])->get('/student/dashboard', fn() => "Welcome Student")->name('student.dashboard');
Route::middleware(['auth', 'role:teacher'])->get('/teacher/dashboard', fn() => "Welcome Teacher")->name('teacher.dashboard');
Route::middleware(['auth', 'role:admin'])->get('/admin/dashboard', fn() => "Welcome Admin")->name('admin.dashboard');
Route::middleware(['auth', 'role:superadmin'])->get('/superadmin/dashboard', fn() => "Welcome Super Admin")->name('superadmin.dashboard');





