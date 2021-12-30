<?php

namespace App\Http\Livewire\Donar;

use App\Models\Donate;
use Livewire\Component;

class ShowDonationComponent extends Component
{
    public function render()
    {
        $donations = Donate::paginate();
        return view('livewire.donar.show-donation-component', ['donations'=>$donations])->layout('layouts.master');
    }
}
