<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use Livewire\Component;

class AllEventComponent extends Component
{
    public function render()
    {
        $events = Event::paginate(20);
        return view('livewire.admin.all-event-component', ['events'=>$events] )->layout('layouts.master');
    }
}
