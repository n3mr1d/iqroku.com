<?php

namespace App\Livewire\Auth;

use App\Enum\Gander;
use App\Enum\LevelTPA;
use App\Models\RegisterTpa;
use Illuminate\Validation\Rules\Enum;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use WireUi\Traits\WireUiActions;

class Register extends Component
{
    use WireUiActions;

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

    #[Validate('required')]
    public $whatsapp = '';

    // Step 3: Additional Info
    public bool $tpalama = false;

    #[Validate('required|email')]
    public string $email = '';

    public bool $pendampingan = false;

    public array $levelTpaOptions = []; // list enum

    public $leveltpa = '';      // nilai terpilih

    public $saran = '';

    public array $genderoption = [];

    public function mount()
    {
        $this->levelTpaOptions = LevelTPA::cases();
        $this->genderoption = Gander::cases();

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
                'gender' => ['required', new Enum(Gander::class)],
                'datebirth' => 'required|date|before:today',
            ]);
        } elseif ($this->step == 2) {
            $this->validate([
                'name_father' => 'required|min:3',
                'name_mother' => 'required|min:3',
                'whatsapp' => 'required|numeric|min_digits:10',
                'email' => 'required|email',
            ]);
        }
    }

    private function infoSuccess(): void
    {

        $this->notification()->send([

            'icon' => 'success',

            'title' => 'Success Register!',

            'description' => 'User registered successfully.',

        ]);

    }

    public function register()
    {
        $this->validate(
            [
                'tpalama' => 'boolean',
                'leveltpa' => [
                    'nullable',
                    'required_if:tpalama,true',
                    new Enum(LevelTPA::class),
                ],
                'pendampingan' => 'boolean',
                'saran' => 'nullable|string',
            ],
            ['leveltpa.required_if' => 'Please select a level']
        );
        if ($this->tpalama == false) {
            $this->leveltpa = null;
        }

        RegisterTpa::create([
            'name' => $this->name,
            'email' => $this->email,
            'gender' => $this->gender,
            'datebirth' => $this->datebirth,
            'name_father' => $this->name_father,
            'name_mother' => $this->name_mother,
            'whatsapp' => $this->whatsapp,
            'tpalama' => $this->tpalama ?? false,
            'leveltpa' => $this->leveltpa ?? 'belum',
            'pendampingan' => $this->pendampingan ?? false,
            'saran' => $this->saran ?? null,
        ]);
        $this->infoSuccess();

        session()->flash('status', 'User registered successfully. check you email now !!');

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
