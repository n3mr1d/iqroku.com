<?php

namespace App\Livewire\Auth;

use App\Enum\Role;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Layout('components.layouts.auth')]
    #[Title('Login')]
    public string $email;
    public string $password;
    public bool $remember;

    public function login()
    {
        $this->validate([
            'email' => 'required',
            'password' => 'required',
            'remember' => 'boolean|nullable',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember ?? false)) {
            session()->regenerate();

            $user = Auth::user();

            if ($user->role == Role::ADMIN) {
                return redirect()->intended(route('dashboard.admin'));
            }

            if ($user->role == Role::TEACHER) {
                return redirect()->intended(route('dashboard.teacher'));
            }

            if ($user->role == Role::STUDENT) {
                return redirect()->intended(route('dashboard.student'));
            }

        }


        $this->addError('email', trans('auth.failed'));

        $this->reset('password');
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
