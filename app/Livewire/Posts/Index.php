<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{

    #[Title('Posts')] // Set title component

    #[On('postCreated')] // event listener dari component yang menggunakan method dispatch(event, response_model_id), supaya reaktive itu terjadi

    public function render()
    {
        $get_list = \App\Models\Post::query()->with('user')->latest()->get(); // get all from table posts, eager loading
        return view('livewire.posts.index', ['posts' => $get_list]);
    }

    public function updateList($post)
    {
        // method ini yang akan listen component dari view dengan key $post
    }

}
