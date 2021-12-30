<?php

namespace App\Http\Livewire\Admin;

use App\Models\Donate;
use Livewire\Component;

class UpdateDonationSComponent extends Component
{

    public $tran_id;
    public $user_id;
    public $donate_as;
    public $donate;
    public $donate_s;
    public $donat_id;

    public function mount($donate_id)
    {
        $this->id= $donate_id;
        $donation = Donate::where('id', $donate_id)->first();

        $this->donate_s= $donation->donate_s;
        $this->donat_id= $donation->id;

    }

    public function donates()
    {
        $donation = Donate::find($this->donat_id);

        $donation->donate_s= $this->donate_s;
        $donation->save();
        session()->flash('message', 'Donation Request has been updated successfully!');

    }

    public function render()
    {
        $donate = Donate::where('id', $this->id)->first();
        return view('livewire.admin.update-donation-s-component', ['donate'=>$donate])->layout('layouts.master');
    }
}
