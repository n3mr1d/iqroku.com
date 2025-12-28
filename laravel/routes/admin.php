<?php

use App\Livewire\Admin\Createuser;
use App\Livewire\Admin\RegisterStudent;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('create-user', Createuser::class)->name('index.createuser');

    Route::get('register-student', RegisterStudent::class)->name('index.register-student');
});
