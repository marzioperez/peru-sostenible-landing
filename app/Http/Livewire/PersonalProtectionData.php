<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PersonalProtectionData extends Component {
    public function render() {
        return view('livewire.personal-protection-data')->layout('layouts.app', ['header_fixed' => false]);
    }
}
