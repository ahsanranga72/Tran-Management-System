<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class CausesComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.causes-component')->layout('layouts.master');
    }
}
