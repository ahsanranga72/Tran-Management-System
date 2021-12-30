<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tran;
use Livewire\Component;

class CompleteRequestComponent extends Component
{
    public function render()
    {
        $trans = Tran::where('status', 'Complete')->paginate(20);
        return view('livewire.admin.complete-request-component', ['trans'=>$trans])->layout('layouts.master');
    }
}
