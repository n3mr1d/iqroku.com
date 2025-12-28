<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
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
            ['id' => 'hero', 'label' => 'Home'],
            ['id' => 'about', 'label' => 'About'],
            ['id' => 'team', 'label' => 'Team'],
            ['id' => 'curriculum', 'label' => 'Program'],
            ['id' => 'activities', 'label' => 'Activities'],
            ['id' => 'rules', 'label' => 'Rules'],
        ];
        return view('components.footer', compact('navItems'));
    }
}
