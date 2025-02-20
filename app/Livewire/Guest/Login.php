<?php

namespace App\Livewire\Guest;

use Flux\Flux;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate(['required', 'email'])]
    public $email;

    #[Validate(['required'])]
    public $password;

    public $remember = false;
    public $authenticationFailure = false;

    
    #[Layout("components.layouts.guest")]
    public function render()
    {
        return view('livewire.guest.login');
    }

    public function submit(): void
    {
        $this->authenticationFailure = false;
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials, $this->remember)) {
            $this->redirect(route('home'), navigate: true);
            return;
        }

        $this->authenticationFailure = true;
    }
}