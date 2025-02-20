<?php

namespace App\Livewire\Guest;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate(['required'])] 
    public $name;

    #[Validate(['required', 'email'])] 
    public $email;

    #[Validate(['required', 'min:8'])] 
    public $password;

    #[Validate('accepted', as: 'termos e políticas')] 
    public $accepted = false;

    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.guest.register');
    }

    public function submit(): void
    {
        $this->validate();

        $credentials = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ];

        User::query()->firstOrCreate($credentials);

        Auth::attempt($credentials);

        redirect('/login');
    }
}