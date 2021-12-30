<?php

namespace App\Http\Livewire\Donar;

use App\Models\Donate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DonateComponent extends Component
{
    public $tran_id;
    public $user_id;
    public $donate_as;
    public $donate;

    public function donate()
    {
        $donat = new Donate();
        $donat->tran_id = session()->get('tran_id')['data'];
        $donat->user_id = Auth::user()->id;
        $donat->donate_as = $this->donate_as;
        $donat->donate = $this->donate;
        $donat->save();
        session()->flash('message', 'Your Donation has been Submited. Please wait for Approve Thank you!');
    }
    public function render()
    {
        return view('livewire.donar.donate-component')->layout('layouts.master');
    }
}
