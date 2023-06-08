<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Thanks extends Component {

    public $user_name = null;

    public function mount() {
        $token = request()->input("token");
        if ($token) {
            $user = User::where('token', $token)->get()->last();
            if ($user) {
                $this->user_name = $user['full_name'];
            } else {
                return redirect()->route('home');
            }
        }
    }

    public function render() {
        return view('livewire.auth.thanks')->layout('layouts.full');
    }
}
