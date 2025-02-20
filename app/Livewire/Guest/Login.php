<?php

namespace App\Livewire\Guest;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    #[Layout("components.layouts.guest")]
    public function render()
    {
        return view('livewire.guest.login');
    }
}