<?php

namespace App\Http\Livewire\Donar;

use App\Models\Donate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $donations = Donate::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->get()->take(10);
        $totalCost = Donate::where('user_id', Auth::user()->id)->count();
        $totalPurchase = Donate::where('donate_s', '!=', 'Pending')->where('user_id', Auth::user()->id)->count();
        $totalDelivered = Donate::where('donate_s','Complete')->where('user_id', Auth::user()->id)->count();
        $totalCanceled = Donate::where('donate_s','Pending')->where('user_id', Auth::user()->id)->count();
        return view('livewire.donar.dashboard-component',[
            'donations'=>$donations,
            'totalCost'=>$totalCost,
            'totalPurchase'=>$totalPurchase,
            'totalDelivered'=>$totalDelivered,
            'totalCanceled'=>$totalCanceled,
        ])->layout('layouts.master');
    }
}
