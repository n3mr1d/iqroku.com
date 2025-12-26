<?php

namespace App\Livewire\Admin;

use App\Enum\Role;
use App\Models\User;
use Livewire\Component;
use App\Livewire\Header\Admin;
use Livewire\Attributes\Title;
use WireUi\Traits\WireUiActions;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Support\Facades\Session;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Createuser extends Component
{
    use WireUiActions, WithPagination;
    #[Title('Create New User')]

    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('required|email|unique:users,email')]
    public string $email = '';

    #[Validate('required|string|min:8')]
    public string $password = '';

    #[Validate(['required', new Enum(Role::class)])]
    public string $roleform = '';

    public array $roles = [];
    public string $activeTab = 'create';
    public int $countuser = 0;
    public string $search = '';

    public function mount()
    {
        $this->countuser = User::count();
        $this->roles = Role::cases();
    }


    public function refreshcount()
    {
        $this->countuser = User::count();

    }
    public function save()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->roleform,
            'email_verified_at' => now(),
        ]);
        $this->reset(['name', 'email', 'password']);
        $this->refreshcount();
        $this->infoSuccess();

    }
    private function infoSuccess(): void
    {

        $this->notification()->send([

            'icon' => 'success',

            'title' => 'Success Created!',

            'description' => 'User created successfully.',

        ]);

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
