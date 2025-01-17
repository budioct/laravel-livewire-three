<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:2', 'max:255'])] // aturan validasi
    public string $title = ''; // attribute

    #[Rule(['required'])]
    public string $body = '';

    public function store()
    {
        // user bisa banyak post

        $user_auth_id = Auth::user()->id; // find user authentication

        $user = \App\Models\User::query()->find($user_auth_id); // find by id user
        //$save = $this->all(); // jika tidak menggunakan validasi // all() akan ambil semua attribute component
        $data = $this->validate(); // validasi form input // validate() akan ambil semua attribute component

        // posts() adalah relasi ke model user()
        if (!$user) {
            flash('User not found', 'error');
            return;
        }

        $store_response = $user->posts()->create($data); // proses eloquent model create

        // alert dari laravel
        // session()->flash('message', 'Post successfully created.'); // (key, message) // handle alert setelah create data

        // alert dari library spatie/laravel-flash
        flash('Post successfully created.', 'success');

        $this->reset(); // reset() // akan otomatis instance $title $body menjadi blank '', setelah proses create()

        return $store_response;
    }

    public function update(){}
    public function delete(){}

}
