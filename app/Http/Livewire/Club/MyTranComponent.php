<?php

namespace App\Http\Livewire\Club;

use App\Models\Tran;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class MyTranComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $trans = Tran::where('user_id', Auth::user()->id)->paginate(10);
        return view('livewire.club.my-tran-component' , ['trans'=>$trans])->layout('layouts.master');
    }
}
