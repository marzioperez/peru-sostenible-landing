<?php

namespace App\Http\Livewire\Event;

use App\Models\Speaker;
use Livewire\Component;

class Speakers extends Component {

    public $speakers = [];

    public function mount() {
        $this->speakers = Speaker::ordered()->get();
    }

    public function render() {
        return view('livewire.event.speakers')->layout('layouts.app', ['header_fixed' => false]);
    }
}
