<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.blog-component')->layout('layouts.master');
    }
}
