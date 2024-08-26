<?php

namespace App\Livewire\Posts;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{

    #[Rule(['required', 'string', 'min:2', 'max:255'])] // aturan validasi
    public string $title = ''; // attribute

    #[Rule(['required'])]
    public string $body = '';

    public function save()
    {
        // user bisa banyak post

        $user = User::find(1); // find by id user
        $validate = $this->validate(); // validasi form input

        // posts() adalah relasi ke model user()
        $user->posts()->create($validate); // proses eloquent model create

        $this->reset(); // reset() // akan otomatis instance $title $body menjadi blank '', setelah proses create()
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
