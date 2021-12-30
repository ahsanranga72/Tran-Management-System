<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tran;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;



class UpdateTranRequestComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $desc;
    public $image;
    public $status;
    public $tran_id;
    public $newimage;

    public function mount($tran_slug)
    {
        $tran = Tran::where('id', $tran_slug)->first();
        $this->title= $tran->title;
        $this->desc= $tran->desc;
        $this->image= $tran->image;
        $this->status= $tran->status;
        $this->tran_id= $tran->id;

    }

    

    public function updatetran()
    {
        $tran = Tran::find($this->tran_id);
        $tran->title= $this->title;
        $tran->slug= $this->slug;
        $tran->desc= $this->desc;
        $tran->image= $this->image;
        $tran->status= $this->status;
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('products', $imageName);
            $tran->image = $imageName;
        }
        $tran->save();
        session()->flash('message', 'Tran Request has been updated successfully!');

    }
    public function render()
    {

        return view('livewire.admin.update-tran-request-component')->layout('layouts.master');
    }
}
