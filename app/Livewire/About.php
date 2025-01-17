<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class About extends Component
{

    #[Title('About')] // Set title component

    public function render()
    {
        return view('livewire.about');
    }
}
