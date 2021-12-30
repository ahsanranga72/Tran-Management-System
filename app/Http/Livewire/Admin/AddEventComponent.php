<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event; 
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AddEventComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $desc;
    public $image;

    public function generateslug()
    {
        $this->slug = Str::slug($this->title,'-');
    }

    public function addevent()
    {
        $event = new Event();
        $event->title = $this->title;
        $event->desc = $this->desc;
        $event->slug = $this->slug;
        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('event', $imageName);
        $event->image = $imageName;
        $event->save();
        session()->flash('message', 'Event has been created successfully!');

    }
    public function render()
    {
        return view('livewire.admin.add-event-component')->layout('layouts.master');
    }
}
