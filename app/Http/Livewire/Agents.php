<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Agents extends Component
{
    public function render()
    {
        return view('livewire.agents');
    }

    public function select(int $id)
    {
        return redirect()->route("onglets.membres", ["a"=>$id]);
    }
}
