<?php

namespace App\Http\Livewire\Event\Live;

use Livewire\Component;

class Index extends Component {


    public function render() {
        return view('livewire.event.live.index')->layout('layouts.app', ['header_fixed' => false]);
    }
}
