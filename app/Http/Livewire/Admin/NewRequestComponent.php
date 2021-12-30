<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tran;
use Livewire\Component;

class NewRequestComponent extends Component
{
    public function render()
    {
        $trans = Tran::where('status', 'Pending')->paginate(20);
        return view('livewire.admin.new-request-component', ['trans'=>$trans])->layout('layouts.master');
    }
}
