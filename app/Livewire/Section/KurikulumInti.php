<?php

namespace App\Livewire\Section;

use Livewire\Component;

class KurikulumInti extends Component
{

    public function render()
    {
        $curricula = [
            [
                'id' => 1,
                'icon' => 'book-open',
                'title' => 'IQRA\' 1–6 & AL-QUR\'AN',
                'description' => 'Systematic learning from basic Arabic letters to Qur\'an recitation with proper tajweed',
                'color' => 'from-blue-50 to-blue-100',
                'border' => 'border-blue-200',
                'hover' => 'hover:border-blue-400'
            ],
            [
                'id' => 2,
                'icon' => '',
                'title' => 'DAILY PRAYERS MEMORIZATION',
                'description' => 'Essential daily prayers for children including morning, evening, and mealtime supplications',
                'color' => 'from-green-50 to-green-100',
                'border' => 'border-green-200',
                'hover' => 'hover:border-green-400'
            ],
            [
                'id' => 3,
                'icon' => '🕌',
                'title' => 'ISLAMIC BASICS',
                'description' => 'Fundamental Islamic knowledge covering manners (Adab), basic jurisprudence (Fiqh), and pillars of faith',
                'color' => 'from-purple-50 to-purple-100',
                'border' => 'border-purple-200',
                'hover' => 'hover:border-purple-400'
            ],
            [
                'id' => 4,
                'icon' => '📝',
                'title' => 'WEEKLY SURAH MEMORIZATION',
                'description' => 'Structured program to memorize short surahs from Juz Amma with proper pronunciation',
                'color' => 'from-orange-50 to-orange-100',
                'border' => 'border-orange-200',
                'hover' => 'hover:border-orange-400'
            ],
            [
                'id' => 5,
                'icon' => '📚',
                'title' => 'ISLAMIC STORIES',
                'description' => 'Inspirational stories of Prophets and companions to build character and understanding',
                'color' => 'from-pink-50 to-pink-100',
                'border' => 'border-pink-200',
                'hover' => 'hover:border-pink-400'
            ],
            [
                'id' => 6,
                'icon' => '✍️',
                'title' => 'ADDITIONAL ACTIVITIES',
                'description' => 'Qur\'anic verse writing practice, Islamic educational videos, and interactive learning for teens',
                'color' => 'from-teal-50 to-teal-100',
                'border' => 'border-teal-200',
                'hover' => 'hover:border-teal-400'
            ]
        ];
        return view('livewire.section.kurikulum-inti', compact('curricula'));
    }
}
