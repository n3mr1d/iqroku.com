<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $navItems = [
            ['id' => 'hero', 'label' => 'Home', 'icon' => 'fa-house'],
            ['id' => 'about', 'label' => 'About', 'icon' => 'fa-circle-info'],
            ['id' => 'team', 'label' => 'Team', 'icon' => 'fa-users'],
            ['id' => 'curriculum', 'label' => 'Program', 'icon' => 'fa-book-open'],
            ['id' => 'activities', 'label' => 'Activities', 'icon' => 'fa-bolt'],
            ['id' => 'rules', 'label' => 'Rules', 'icon' => 'fa-scale-balanced'],
        ];
        return view('components.navbar', compact('navItems'));
    }
}