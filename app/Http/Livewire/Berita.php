<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Berita extends Component
{
    public $txtkomentar;
    public function render()
    {
        return view('livewire.berita');
    }
}
