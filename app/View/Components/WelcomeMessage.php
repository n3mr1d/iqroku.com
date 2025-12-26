<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class WelcomeMessage extends Component
{

    public string $nama;
    public string $role;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $user = Auth::user();
        $this->nama = $user->name;
        $this->role = $user->role->label();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome-message');
    }
}
