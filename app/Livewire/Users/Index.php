<?php

namespace App\Livewire\Users;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination; // implementasi pagination di livewire

    #[Title('Users')] // Set title component

    public function render()
    {
        $get_list_users = \App\Models\User::query()->latest()->paginate(10);
        return view('livewire.users.index', ['users' => $get_list_users]);
    }
}
