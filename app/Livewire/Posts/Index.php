<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{

    #[Title('Posts')] // Set title component

    public function render()
    {
        return view('livewire.posts.index');
    }
}
