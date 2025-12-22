<?php

namespace App\Livewire\Section;

use Livewire\Attributes\Computed;
use Livewire\Component;

class ProgramGoals extends Component
{
    public string $programTitle = 'TPA Program 2025-2026';

    public string $startDate = 'September 2025';

    public string $endDate = 'June 2026';

    public int $activeStep = 0;

    #[Computed]
    public function timelineItems()
    {
        return collect([
            [
                'id' => 1,
                'title' => 'Academic Excellence',
                'description' => '90% of students improve by at least one Iqra\' level within one year',
                'metric' => '90%',
                'category' => 'student-achievement',
                'icon' => 'academic-cap',
                'color' => 'emerald',
                'target_date' => 'June 2026',
                'status' => 'in-progress',
            ],
            [
                'id' => 2,
                'title' => 'Attendance Target',
                'description' => 'Minimum student attendance of 75% per semester',
                'metric' => '75%',
                'category' => 'engagement',
                'icon' => 'calendar',
                'color' => 'blue',
                'target_date' => 'Per Semester',
                'status' => 'in-progress',
            ],
            [
                'id' => 3,
                'title' => 'Parent Partnership',
                'description' => '60% of parents assist children\'s practice at home',
                'metric' => '60%',
                'category' => 'family-involvement',
                'icon' => 'users',
                'color' => 'purple',
                'target_date' => 'Ongoing',
                'status' => 'in-progress',
            ],
            [
                'id' => 4,
                'title' => 'Satisfaction Goal',
                'description' => '80% parent satisfaction based on an end-of-year survey',
                'metric' => '80%',
                'category' => 'satisfaction',
                'icon' => 'star',
                'color' => 'amber',
                'target_date' => 'June 2026',
                'status' => 'pending',
            ],
        ]);
    }

    public function setActiveStep(int $step)
    {
        $this->activeStep = $step;
    }

    public function render()
    {
        return view('livewire.section.program-goals');
    }
}
