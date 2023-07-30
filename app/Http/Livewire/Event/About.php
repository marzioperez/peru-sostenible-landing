<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;

class About extends Component
{
    public function render() {
        return view('livewire.event.about')->layout('layouts.app', ['header_fixed' => false]);
    }
}
