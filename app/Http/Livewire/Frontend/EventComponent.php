<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class EventComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $events = Event::where('status','Active')->paginate(20);
        return view('livewire.frontend.event-component',['events'=>$events])->layout('layouts.master');
    }
}
