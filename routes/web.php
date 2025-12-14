<?php

use App\Http\Controllers\Register;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::prefix('/register')->group(function () {

    // new register page for TPA (Student baruu)
    Route::get('/newtpa', [Register::class, 'newTpa'])->middleware('guest')->name('index.newtpa');
    Route::post('/newtpa', [Register::class, 'storeTpa'])->middleware('guest')->name('store.newtpa');
});
