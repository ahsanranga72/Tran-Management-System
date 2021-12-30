<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tran;
use Livewire\Component;

class AllRequestComponent extends Component
{
    public function render()
    {
        $trans = Tran::paginate(20);
        return view('livewire.admin.all-request-component', ['trans'=>$trans])->layout('layouts.master');
    }
}
