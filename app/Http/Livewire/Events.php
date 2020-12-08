<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    public function render()
    {
        $events = Event::orderBy('date', 'desc')->get();

        return view('livewire.events', [
            'events' => $events
        ]);
    }
}
