<?php

namespace App\Http\Livewire\Club;

use App\Models\Tran;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class TranRequestComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $desc;
    public $image;
    public $user_id;

    
    public function tranrequest()
    {
        $tran = new Tran();
        $tran->title = $this->title;
        $tran->desc = $this->desc;
        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('products', $imageName);
        $tran->image = $imageName;
        $tran->user_id = Auth::user()->id;
        $tran->save();
        session()->flash('message', 'Tran Request has been created successfullt!');

    }

    public function render()
    {
        return view('livewire.club.tran-request-component')->layout('layouts.master');
    }
}
