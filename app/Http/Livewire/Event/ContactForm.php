<?php

namespace App\Http\Livewire\Event;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component {

    public $first_name, $last_name, $email, $message;
    public $show_thanks = false;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ];

    protected $messages = [
        'first_name.required' => "Campo obligatorio",
        'last_name.required' => "Campo obligatorio",
        'email.required' => "Campo obligatorio",
        'email.email' => "Campo incorrecto",
        'message.required' => "Campo obligatorio",
    ];

    public function process() {
        $this->validate();
        Contact::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'message' => $this->message
        ]);

        $this->show_thanks = true;
    }

    public function render() {
        return view('livewire.event.contact-form');
    }
}
