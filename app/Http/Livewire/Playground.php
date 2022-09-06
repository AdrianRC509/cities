<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Playground extends Component
{

    public function render()
    {
        return view('livewire.playground')->extends("cities.layout")->section('content');
    }
}
