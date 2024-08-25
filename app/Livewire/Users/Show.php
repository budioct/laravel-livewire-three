<?php

namespace App\Livewire\Users;

use Livewire\Attributes\Title;
use Livewire\Component;

class Show extends Component
{

    // #[Title('User')] // Set title component

    public \App\Models\User $user; // binding object reference

    public function render()
    {
        // return view('livewire.users.show');
        return view('livewire.users.show')->title('User: ' . $this->user->name); // set view dan title page
    }
}
