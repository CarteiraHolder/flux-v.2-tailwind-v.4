<?php

namespace App\Livewire\Guest;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate(['required', 'email'])]
    public $email;

    #[Validate(['required', 'min:8'])]
    public $password;

    public $remember = false;
    
    #[Layout("components.layouts.guest")]
    public function render()
    {
        return view('livewire.guest.login');
    }

    public function submit(): void
    {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        Auth::attempt($credentials, $this->remember);

        redirect()->route('home');

    }
}