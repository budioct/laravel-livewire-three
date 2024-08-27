<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Create extends Component
{

    public \App\Livewire\Forms\PostForm $form;

    public function save()
    {
        $save_response = $this->form->store(); // entity sekaligus DTO,service nya livewire

        $this->dispatch('postCreated', $save_response->id); // dispatch(event, response_model_id) // kita perlu id dari hasil create data post // event reaktive supaya update component dan tidak perlu refresh page
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
