<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component {

    public $first_name, $last_name, $email, $phone, $company;
    public $commitments = [];
    public $commitments_options = User::COMMITMENTS;

    public function setCommit($type) {
        if (in_array($type, $this->commitments)) {
            $this->commitments = array_diff($this->commitments, array($type));
        } else {
            $this->commitments[] = $type;
        }
    }

    public function render() {
        return view('livewire.auth.register');
    }
}
