<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tran;
use Livewire\Component;

class DeclinedRequestComponent extends Component
{
    public function render()
    {
        $trans = Tran::where('status', 'Declined')->paginate(20);
        return view('livewire.admin.declined-request-component', ['trans'=>$trans])->layout('layouts.master');
    }
}
