<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.auth.home');
    }

    public function logout(): void
    {
        Auth::logout();

        $this->redirect(route('login'), navigate: true);
    }
}