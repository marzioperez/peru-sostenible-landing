<?php

namespace App\Http\Livewire\Event;

use App\Models\Photo;
use Livewire\Component;

class Gallery extends Component {

    public $photos = [];

    public function mount() {
        $this->photos = Photo::ordered()->get();
    }

    public function render() {
        return view('livewire.event.gallery')->layout('layouts.app', ['header_fixed' => false]);
    }
}
