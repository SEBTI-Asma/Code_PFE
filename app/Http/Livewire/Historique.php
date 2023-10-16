<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Historique extends Component
{
    public function render()
    {
        return view('livewire.historique')
        ->extends("layouts.acceuil")
        ->section("contenu");
    }
}
