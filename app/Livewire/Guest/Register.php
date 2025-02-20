<?php

namespace App\Livewire\Guest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
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
        dd(
            $this->email,
            $this->password,
            $this->accepted,
        );
    }
}