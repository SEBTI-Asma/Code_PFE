<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Aide extends Component
{
    public function render()
    {
        return view('livewire.aide')
        ->extends("layouts.acceuil")
        ->section("contenu");
    }
}
