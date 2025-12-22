<?php

use App\Http\Controllers\DashboardController;
use App\Http\Middleware\HandleRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->middleware('auth')->name('logout');

/**
 * 
 * Dashboard Admin Role
 *  
 */
Route::prefix('admin')->middleware(['role:admin', 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'admin'])->name('dashboard.admin');
});

/**
 * 
 * Dashboard teacher role
 * 
 */

Route::prefix('teacher')->middleware(['role:teacher', 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'teacher'])->name('dashboard.teacher');
});

/**
 * 
 * Dashboard role student
 * 
 */
Route::prefix('student')->middleware(['role:student', 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'student'])->name('dashboard.student');
});

