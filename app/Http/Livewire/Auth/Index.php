<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Index extends Component {

    public function render() {
        return view('livewire.auth.index')->layout('layouts.full');
    }
}
