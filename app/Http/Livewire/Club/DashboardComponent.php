<?php

namespace App\Http\Livewire\Club;

use App\Models\Tran;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    { 
        $trans = Tran::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->get()->take(10);
        $totalCost = Tran::where('user_id', Auth::user()->id)->count();
        $totalPurchase = Tran::where('status','Approved')->where('user_id', Auth::user()->id)->count();
        $totalDelivered = Tran::where('status','Complete')->where('user_id', Auth::user()->id)->count();
        $totalDeclined = Tran::where('status','Declined')->where('user_id', Auth::user()->id)->count();
        return view('livewire.club.dashboard-component',[
            'trans'=>$trans,
            'totalCost'=>$totalCost,
            'totalPurchase'=>$totalPurchase,
            'totalDelivered'=>$totalDelivered,
            'totalDeclined'=>$totalDeclined,
        ])->layout('layouts.master');
    }
}
