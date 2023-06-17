<?php

namespace App\Http\Livewire\Event;

use App\Models\Speaker;
use Livewire\Component;

class Index extends Component {

    public $speakers;

    public function mount() {
        $this->speakers = Speaker::all();
    }

    public function render() {
        return view('livewire.event.index');
    }
}
