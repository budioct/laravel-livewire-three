<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Timeline extends Component
{

    #[Title('Timeline')] // Set title component

    public function render()
    {
        return view('livewire.timeline');
    }
}
