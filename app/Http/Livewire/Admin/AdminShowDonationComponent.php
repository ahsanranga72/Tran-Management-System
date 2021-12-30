<?php

namespace App\Http\Livewire\Admin;

use App\Models\Donate;
use Livewire\Component;

class AdminShowDonationComponent extends Component
{
    public function render()
    {
        $donations = Donate::paginate();
        return view('livewire.admin.admin-show-donation-component',['donations'=>$donations])->layout('layouts.master');
    }
}
