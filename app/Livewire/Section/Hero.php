<?php

namespace App\Livewire\Section;

use Livewire\Component;

class Hero extends Component
{
    public function render()
    {
        $leadership = [
            ['name' => 'Gabriel F.Harris', 'position' => 'Ketua TPA Abu Dhabi', 'image' => 'Gabriel.jpg'],
            ['name' => 'Rifqi M. Firdaus', 'position' => 'Sekertaris TPA', 'image' => 'Rifqi.jpg'],
            ['name' => 'M. Dhia AL THAF', 'position' => 'Tim Media TPA', 'image' => 'Dhia.jpg'],
            ['name' => 'Fauzan Nur A.', 'position' => 'Bendahara TPA', 'image' => 'Fauzan.jpg'],
        ];
        return view('livewire.section.hero', compact('leadership'));
    }
}
