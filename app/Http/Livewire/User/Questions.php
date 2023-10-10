<?php

namespace App\Http\Livewire\User;

use App\Models\Question;
use Illuminate\Support\Collection;
use Livewire\Component;

class Questions extends Component {

    public Collection $questions;

    public function render() {
        $this->questions = Question::with('activity')->where('user_id', auth()->user()->id)->get();
        return view('livewire.user.questions')->layout('layouts.app', ['header_fixed' => false]);
    }
}
