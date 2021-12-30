<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class EditEventComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $desc;
    public $image;
    public $newimage;

    public function mount($event_slug)
    {
        $event = Event::where('slug', $event_slug)->first();
        $this->title= $event->title;
        $this->slug= $event->slug;
        $this->desc= $event->desc;
        $this->image= $event->image;
        // $this->status= $event->status;
        $this->event_id= $event->id;

    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->title,'-');
    }

    public function editevent()
    {
        $event = Event::find($this->event_id);
        $event->title= $this->title;
        $event->slug= $this->slug;
        $event->desc= $this->desc;
        $event->image= $this->image;
        // $event->status= $this->status;
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('event', $imageName);
            $event->image = $imageName;
        }
        $event->save();
        session()->flash('message', 'Tran Request has been updated successfully!');

    }

    public function render()
    {
        return view('livewire.admin.edit-event-component')->layout('layouts.master');
    }
}
