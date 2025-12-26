<?php

namespace App\View\Components\Section;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
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
        $leadership = [
            ['name' => 'Gabriel F.Harris', 'position' => 'Ketua TPA Abu Dhabi', 'image' => 'Gabriel.jpg'],
            ['name' => 'Rifqi M. Firdaus', 'position' => 'Sekertaris TPA', 'image' => 'Rifqi.jpg'],
            ['name' => 'M. Dhia AL THAF', 'position' => 'Tim Media TPA', 'image' => 'Dhia.jpg'],
            ['name' => 'Fauzan Nur A.', 'position' => 'Bendahara TPA', 'image' => 'Fauzan.jpg'],
        ];
        return view('components.section.hero', compact('leadership'));
    }
}
