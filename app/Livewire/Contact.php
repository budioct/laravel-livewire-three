<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Contact extends Component
{

    #[Title('Contact')] // Set title component

    public function render()
    {
        return view('livewire.contact');
    }
}
