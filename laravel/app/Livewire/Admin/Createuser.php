<?php

namespace App\Livewire\Admin;

use Flux\Flux;
use App\Enum\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use WireUi\Traits\WireUiActions;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Enum;

class Createuser extends Component
{
    use WireUiActions, WithPagination;

    #[Title('Create New User')]
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $roleform = '';

    public array $roles = [];
    public $selectedView = null;
    public string $activeTab = 'create';
    public int $countuser = 0;
    public string $search = '';

    public function mount()
    {
        $this->refreshcount();
        $this->roles = Role::cases();
    }

    public function refreshcount()
    {
        $this->countuser = User::count();
    }

    public function view($id)
    {
        $this->selectedView = User::findOrFail($id);
        Flux::modal('view-user')->show();
    }

    public function edit($id)
    {
        $this->selectedView = User::findOrFail($id);
        $this->name = $this->selectedView->name;
        $this->email = $this->selectedView->email;
        $this->roleform = $this->selectedView->role->value;
        $this->password = ''; // Clear for optional update
        Flux::modal('edit-user')->show();
    }

    public function save()
    {
        $id = $this->selectedView ? $this->selectedView->id : null;

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'roleform' => ['required', new Enum(Role::class)],
        ];

        if ($id) {
            $rules['password'] = 'nullable|string|min:8';
        } else {
            $rules['password'] = 'required|string|min:8';
        }

        $this->validate($rules);

        if ($id) {
            $data = [
                'name' => $this->name,
                'email' => $this->email,
                'role' => $this->roleform,
            ];

            if ($this->password) {
                $data['password'] = Hash::make($this->password);
            }

            $this->selectedView->update($data);

            $this->notification()->send([
                'icon' => 'success',
                'title' => 'User Updated',
                'description' => 'User account updated successfully.',
            ]);

            Flux::modal('edit-user')->close();
        } else {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'role' => $this->roleform,
                'email_verified_at' => now(),
            ]);

            $this->notification()->send([
                'icon' => 'success',
                'title' => 'User Created',
                'description' => 'New user account created successfully.',
            ]);
        }

        $this->resetForm();
        $this->refreshcount();
    }

    public function confirmDelete($id)
    {
        $this->selectedView = User::findOrFail($id);
        Flux::modal('delete-modal')->show();
    }

    public function deleteRegistration()
    {
        if ($this->selectedView) {
            $this->selectedView->delete();
            $this->refreshcount();

            $this->notification()->send([
                'icon' => 'success',
                'title' => 'User Deleted',
                'description' => 'User account has been deleted.',
            ]);

            Flux::modal('delete-modal')->close();
            $this->resetForm();
        }
    }

    public function resetForm()
    {
        $this->reset(['name', 'email', 'password', 'roleform', 'selectedView']);
    }

    public function render()
    {
        $users = User::query()
            ->search($this->search)
            ->latest()
            ->paginate(10);

        return view('livewire.admin.createuser', [
            'userlist' => $users
        ]);
    }
}
