<?php

namespace App\Livewire\Admin;

use App\Enum\Gander;
use App\Enum\LevelTPA;
use Flux\Flux;
use Livewire\Component;
use App\Models\RegisterTpa;
use App\Enum\StatusRegister;
use Illuminate\Validation\Rules\Enum;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use WireUi\Traits\WireUiActions;

class RegisterStudent extends Component
{
    use WithPagination, WithoutUrlPagination, WireUiActions;

    #[Title('Register Student')]
    public $selectedStudent = null;
    public $deleteId = null;
    public $viewSelected = null;

    // Form properties
    public $curentid;
    public $name;
    public $name_father;
    public $name_mother;
    public $whatsapp;
    public $email;
    public $gender;
    public $datebirth;
    public $tpalama = false;
    public $leveltpa;
    public $pendampingan = false;
    public $saran;
    public $admin_notes;
    public $status;

    public string $search = '';
    public int $countRegister;
    public int $countWaiting;
    public int $countRejected;
    public int $countApproved;

    public function mount()
    {
        $this->updateCounts();
    }

    private function updateCounts()
    {
        $this->countRegister = RegisterTpa::count();
        $this->countWaiting = RegisterTpa::where('status', StatusRegister::WAITING)->count();
        $this->countRejected = RegisterTpa::where('status', StatusRegister::REJECTED)->count();
        $this->countApproved = RegisterTpa::where('status', StatusRegister::APPROVED)->count();
    }

    public function view($id)
    {
        $this->viewSelected = RegisterTpa::findOrFail($id);
        Flux::modal('view-student')->show();
    }

    public function edit($id)
    {
        $this->selectedStudent = RegisterTpa::findOrFail($id);
        $this->curentid = $id;

        $this->name = $this->selectedStudent->name;
        $this->name_father = $this->selectedStudent->name_father;
        $this->name_mother = $this->selectedStudent->name_mother;
        $this->whatsapp = $this->selectedStudent->whatsapp;
        $this->email = $this->selectedStudent->email;
        $this->gender = $this->selectedStudent->gender->value;
        $this->datebirth = $this->selectedStudent->datebirth->format('Y-m-d');
        $this->tpalama = $this->selectedStudent->tpalama;
        $this->leveltpa = $this->selectedStudent->leveltpa->value;
        $this->pendampingan = $this->selectedStudent->pendampingan;
        $this->saran = $this->selectedStudent->saran;
        $this->admin_notes = $this->selectedStudent->admin_notes;
        $this->status = $this->selectedStudent->status->value;

        Flux::modal('edit-student')->show();
    }
    public function updateStudent()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'name_father' => 'required|string|max:255',
            'name_mother' => 'required|string|max:255',
            'whatsapp' => 'required|string',
            'email' => 'required|email',
            'gender' => ['required', new Enum(Gander::class)],
            'datebirth' => 'required|date',
            'status' => ['required', new Enum(StatusRegister::class)],
            'leveltpa' => ['required', new Enum(LevelTPA::class)],
        ]);

        $student = RegisterTpa::findOrFail($this->curentid);

        $student->update([
            'name' => $this->name,
            'name_father' => $this->name_father,
            'name_mother' => $this->name_mother,
            'whatsapp' => $this->whatsapp,
            'email' => $this->email,
            'gender' => $this->gender,
            'datebirth' => $this->datebirth,
            'tpalama' => $this->tpalama,
            'leveltpa' => $this->leveltpa,
            'pendampingan' => $this->pendampingan,
            'saran' => $this->saran,
            'admin_notes' => $this->admin_notes,
            'status' => $this->status,
        ]);

        $this->updateCounts();
        Flux::modal('edit-student')->close();

        $this->notification()->send([
            'title' => 'Updated',
            'description' => "{$this->name} has been updated",
            'icon' => 'success',
        ]);

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->reset([
            'name',
            'name_father',
            'name_mother',
            'whatsapp',
            'email',
            'gender',
            'datebirth',
            'tpalama',
            'leveltpa',
            'pendampingan',
            'saran',
            'admin_notes',
            'status',
            'curentid',
            'selectedStudent'
        ]);
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->selectedStudent = RegisterTpa::findOrFail($id);
    }

    public function deleteRegistration()
    {
        if ($this->deleteId) {
            $student = RegisterTpa::findOrFail($this->deleteId);
            $name = $student->name;
            $student->delete();

            $this->updateCounts();
            $this->reset(['deleteId', 'selectedStudent']);

            $this->notification()->send([
                'title' => 'Deleted',
                'description' => "{$name} has been deleted",
                'icon' => 'success',
            ]);

            Flux::modal('delete-modal')->close();
        }
    }

    public function render()
    {
        $register = RegisterTpa::where('name', 'like', "%{$this->search}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.admin.register-student', compact('register'));
    }
}
