<?php

namespace App\Http\Livewire\Event\Live;

use App\Events\NewMessage;
use App\Models\Message;
use Livewire\Component;
use Pusher\Pusher;

class Chat extends Component {

    public string $user;
    public $message;
    public $messages = [];
    public $loggedIn = false;

    public function mount($loggedIn) {
        $this->loggedIn = $loggedIn;
    }

    protected $listeners = [
        'get_messages' => 'getMessages'
    ];

    public function getMessages(): void {
        $this->messages = Message::get()->take(50);
    }

    public function sendMessage() {
        if ($this->message !== "" && !is_null($this->message) && $this->loggedIn) {
            $options = array(
                'cluster' => 'us2',
                'useTLS' => true
            );

            $pusher = new Pusher(
                '8b317cc8640c671a3803',
                '75abebe78a8abe779a77',
                '1457807',
                $options);

            $data['name'] = auth()->user()->full_name;
            $data['message'] = $this->message;
            $this->message = '';
            Message::create($data);
            $pusher->trigger('chat', 'send-message', $data);
        }
    }

    public function render() {
        $this->messages = Message::get()->take(50);
        return view('livewire.event.live.chat');
    }
}
