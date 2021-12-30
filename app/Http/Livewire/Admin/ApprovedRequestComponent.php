<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tran;
use Livewire\Component;

class ApprovedRequestComponent extends Component
{
    public function render()
    {
        $trans = Tran::where('status', 'Approved')->paginate(20);
        return view('livewire.admin.approved-request-component', ['trans'=>$trans])->layout('layouts.master');
    }
}
