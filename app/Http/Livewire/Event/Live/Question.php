<?php

namespace App\Http\Livewire\Event\Live;

use App\Settings\GeneralSettings;
use Livewire\Component;

class Question extends Component {

    public $question;

    public $loggedIn = false;

    public function mount($loggedIn) {
        $this->loggedIn = $loggedIn;
    }

    public function sendQuestion() {
        if ($this->question !== "" && !is_null($this->question) && $this->loggedIn) {
            $data['user_id'] = auth()->user()->id;
            $data['question'] = $this->question;
            $data['schedule_activity_id'] = app(GeneralSettings::class)->current_activity_id;
            \App\Models\Question::create($data);
            $this->question = '';
        }
    }

    public function render() {
        return view('livewire.event.live.question');
    }
}
