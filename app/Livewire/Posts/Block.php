<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Block extends Component
{

    public \App\Models\Post $post; // <livewire:posts.block :post="$post" /> // supaya $post yang dikirim dari component Index bisa di binding dengan model component Block

    public function render()
    {
        return view('livewire.posts.block');
    }
}
