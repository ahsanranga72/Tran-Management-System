<?php

namespace App\Http\Livewire\Donar;

use App\Models\Tran;
use Livewire\Component;
use Livewire\WithPagination;

class DonationComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $trans = Tran::where('status','Approved')->paginate(20);
        return view('livewire.donar.donation-component', ['trans'=>$trans])->layout('layouts.master');
    }
}
