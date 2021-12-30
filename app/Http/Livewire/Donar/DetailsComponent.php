<?php

namespace App\Http\Livewire\Donar;

use App\Models\Tran;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $id;

    public function mount($id){
        $this->slug = $id;
    }

    public function donate($tran_id)
    {
        session()->put('tran_id',[
            'data'=> $tran_id,
        ]);
        return redirect()->route('donar.donate');
    }

    public function render()
    {
        $tran = Tran::where('id', $this->id)->first();
        return view('livewire.donar.details-component', ['tran'=>$tran])->layout('layouts.master');
    }
}
