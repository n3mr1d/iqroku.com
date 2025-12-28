<?php

namespace App\View\Components\Section;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class KurikulumInti extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    private function kurikulum(): array
    {
        $cur= [
            [
                'id' => 1,
                'text' => 'text-blue-500',
                'icon' => 'fa-solid fa-book',
                'title' => 'IQRA\' 1–6 & AL-QUR\'AN',
                'description' => 'Systematic learning from basic Arabic letters to Qur\'an recitation with proper tajweed',
                'color' => 'from-blue-50 to-blue-100',
                'border' => 'border-blue-200',
                'hover' => 'hover:border-blue-400'
            ],
            [
                'id' => 2,
                'text' => 'text-green-500',
                'icon' => 'fa-solid fa-person-praying',
                'title' => 'DAILY PRAYERS MEMORIZATION',
                'description' => 'Essential daily prayers for children including morning, evening, and mealtime supplications',
                'color' => 'from-green-50 to-green-100',
                'border' => 'border-green-200',
                'hover' => 'hover:border-green-400'
            ],
            [
                'id' => 3,
                'text' => 'text-purple-500',
                'icon' => 'fa-solid fa-mosque',
                'title' => 'ISLAMIC BASICS',
                'description' => 'Fundamental Islamic knowledge covering manners (Adab), basic jurisprudence (Fiqh), and pillars of faith',
                'color' => 'from-purple-50 to-purple-100',
                'border' => 'border-purple-200',
                'hover' => 'hover:border-purple-400'
            ],
            [
                'id' => 4,
                'text' => 'text-orange-500',
                'icon' => 'fa-solid fa-memory',
                'title' => 'WEEKLY SURAH MEMORIZATION',
                'description' => 'Structured program to memorize short surahs from Juz Amma with proper pronunciation',
                'color' => 'from-orange-50 to-orange-100',
                'border' => 'border-orange-200',
                'hover' => 'hover:border-orange-400'
            ],
            [
                'id' => 5,
                'text' => 'text-pink-500',
                'icon' => 'fa-regular fa-books',
                'title' => 'ISLAMIC STORIES',
                'description' => 'Inspirational stories of Prophets and companions to build character and understanding',
                'color' => 'from-pink-50 to-pink-100',
                'border' => 'border-pink-200',
                'hover' => 'hover:border-pink-400'
            ],
            [
                'id' => 6,
                'text' => 'text-teal-500',
                'icon' => 'fa-solid fa-pen',
                'title' => 'ADDITIONAL ACTIVITIES',
                'description' => 'Qur\'anic verse writing practice, Islamic educational videos, and interactive learning for teens',
                'color' => 'from-teal-50 to-teal-100',
                'border' => 'border-teal-200',
                'hover' => 'hover:border-teal-400'
            ]
        ];

        return $cur;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $curricula = $this->kurikulum();
        return view('components.section.kurikulum-inti', compact('curricula'));
    }
}
