<?php

namespace App\Http\Livewire\Event\Live;

use Livewire\Component;

class Question extends Component {

    public $question;

    public function sendQuestion() {
        if ($this->question !== "" && !is_null($this->question)) {
            $data['user_id'] = 1;
            $data['question'] = $this->question;
            \App\Models\Question::create($data);
            $this->question = '';
        }
    }

    public function render() {
        return view('livewire.event.live.question');
    }
}
