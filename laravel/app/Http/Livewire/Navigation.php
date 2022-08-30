<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use Livewire\Component;



class Navigation extends Component
{
    public function render()
    {
        $categories = Categorie::all();

        return view('livewire.navigation', compact('categories'));
    }
}
