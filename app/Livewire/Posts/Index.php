<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{

    #[Title('Posts')] // Set title component

    #[On('postCreated')] // event listener dari component yang menggunakan method dispatch(event, response_model_id), supaya reaktive itu terjadi

    #[Lazy] // ini akan membuat component saat berinterasksi dengan fetch data by default akan menjadi Lazy Loading

    public function render()
    {
        //sleep(3); // thread sleep

        $get_list = \App\Models\Post::query()->with('user')->latest()->get(); // get all from table posts, eager loading
        return view('livewire.posts.index', ['posts' => $get_list]);
    }

    public function updateList($post)
    {
        // method ini yang akan listen component dari view dengan key $post
    }

    public function placeholder()
    {
        // membuat tampilan ketika loading lazy maka user akan di tampilkan ini dulu baru sebari menunggu data yang sudah siap di tampilkan
        //return <<<BLADE
        //<div>Loading...</div>
        //BLADE;
        return view('livewire.posts.placeholder');
    }

}
