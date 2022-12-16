<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Membres extends Component
{
    public $a;
    protected $queryString = ["a"];

    public function render()
    {
        return view('livewire.membres');
    }
}
