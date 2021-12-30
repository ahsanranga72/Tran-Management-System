<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Event;
use Livewire\Component;

class EventDetailComponent extends Component
{
    public $id;

    public function mount($id){
        $this->id = $id;
    }
    public function render()
    {
        $event = Event::where('id', $this->id)->first();
        return view('livewire.frontend.event-detail-component',['event'=>$event])->layout('layouts.master');
    }
}
