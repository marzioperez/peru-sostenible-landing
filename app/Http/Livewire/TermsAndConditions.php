<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TermsAndConditions extends Component {

    public function render() {
        return view('livewire.terms-and-conditions')->layout('layouts.app', ['header_fixed' => false]);
    }
}
