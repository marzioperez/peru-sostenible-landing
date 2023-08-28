<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;

class MoreDetails extends Component {
    public function render() {
        return view('livewire.event.more-details')->layout('layouts.app', ['header_fixed' => false]);
    }
}
