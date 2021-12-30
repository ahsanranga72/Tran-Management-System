<?php

namespace App\Http\Livewire\Admin;

use App\Models\Donate;
use App\Models\Tran;
use App\Models\User;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $donations = Donate::orderBy('created_at', 'DESC')->where('donate_s','Pending')->get()->take(10);
        $trans = Tran::orderBy('created_at', 'DESC')->get()->take(10);
        $totalCost = Tran::count();
        $totalPurchase = Tran::where('status','Approved')->count();
        $totalDelivered = User::where('role_id',3)->count();
        $totalDeclined = User::where('role_id',3)->count();
        return view('livewire.admin.dashboard-component',[
            'trans'=>$trans,
            'donations'=>$donations,
            'totalCost'=>$totalCost,
            'totalPurchase'=>$totalPurchase,
            'totalDelivered'=>$totalDelivered,
            'totalDeclined'=>$totalDeclined,
        ])->layout('layouts.master');
    }
}
