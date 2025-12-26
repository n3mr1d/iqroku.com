<?php

use App\Livewire\Admin\Createuser;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('create-user', Createuser::class)->name('index.createuser');


});