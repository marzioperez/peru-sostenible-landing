<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PrivacyPolicies extends Component {

    public function render() {
        return view('livewire.privacy-policies')->layout('layouts.app', ['header_fixed' => false]);
    }
}
