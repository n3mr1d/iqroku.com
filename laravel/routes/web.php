<?php

use App\Models\User;
use Laravel\Fortify\Features;
use App\Livewire\Auth\Register;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\TwoFactor;
use App\Livewire\Settings\Appearance;
use App\Mail\WelcomeMail;
use App\Models\RegisterTpa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/register', Register::class)->name('register');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



require_once 'admin.php';
require_once 'teacher.php';
require_once 'student.php';
