<?php

namespace App\Livewire\Auth;

use App\Enum\LevelTPA;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Title('Register')]
    #[Layout('components.layouts.auth')]

    public $step = 1;

    // Step 1: Child's Data
    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|in:L,P')]
    public $gender = '';

    #[Validate('required|date|before:today')]
    public $datebirth = '';

    // Step 2: Parent's Data
    #[Validate('required|min:3')]
    public $name_father = '';

    #[Validate('required|min:3')]
    public $name_mother = '';

    #[Validate('required|numeric')]
    public $whatsapp = '';

    // Step 3: Additional Info
    public bool $tpalama = false;



    public bool $pendampingan = false;
    public $leveltpa;
    public $saran = '';

    public function mount()
    {
        $this->leveltpa = LevelTPA::cases();
    }

    public function nextStep()
    {
        $this->validateCurrentStep();
        $this->step++;
    }

    public function previousStep()
    {
        $this->step--;
    }

    public function validateCurrentStep()
    {
        if ($this->step == 1) {
            $this->validate([
                'name' => 'required|min:3',
                'gender' => 'required|in:L,P',
                'datebirth' => 'required|date|before:today',
            ]);
        } elseif ($this->step == 2) {
            $this->validate([
                'name_father' => 'required|min:3',
                'name_mother' => 'required|min:3',
                'whatsapp' => 'required|numeric|min_digits:10',
            ]);
        }
    }

    public function register()
    {
        $this->validate(
            [
                'tpalama' => 'boolean',
                'leveltpa' => 'nullable|required_if:tpalama,true|' . LevelTPA::class,
                'pendampingan' => 'boolean',
                'saran' => 'nullable|string',
            ],
            ['leveltpa.required_if' => 'Please select a level']
        );


        session()->flash('status', 'Registration successful! (Placeholder)');

        $this->redirect(route('login'), navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
