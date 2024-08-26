<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{

    #[Layout('layouts.guest')] // definisikan layout component Login yang akan di include main Layout 'resources/views/layouts/guest.blade.php'

    #[Validate('required|email')]
    public string $email = '';
    #[Rule('required')]
    public string $password = '';

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        //if (Auth::attempt($this->only('email', 'password'))) {
        //    return redirect()->route('home');
        //}

        // percobaan proses login, mencakup validasi
        if (Auth::attempt($this->validate())) {
            return redirect()->route('home'); // redirect ke route home
        }

        // jika email tidak ada di db maka akan exception pesan,, yang di tunjunkan pada key email di flash message
        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
