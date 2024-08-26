<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Create extends Component
{

    public \App\Livewire\Forms\PostForm $form;

    public function save()
    {
        $this->form->store(); // entity sekaligus DTO,service nya livewire
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
