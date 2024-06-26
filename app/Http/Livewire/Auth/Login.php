<?php

namespace App\Http\Livewire\Auth;

use App\Models\LoginLog;
use App\Settings\GeneralSettings;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component {

    public $email, $error;

    protected $rules = [
        'email' => 'required|email'
    ];

    protected $messages = [
        'email.required' => "Campo obligatorio",
        'email.email' => "Campo incorrecto"
    ];

    public function process() {
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password' => '123456'])){
            LoginLog::create([
                'user_id' => auth()->user()->id,
                'schedule_activity_id' => app(GeneralSettings::class)->current_activity_id
            ]);
            redirect()->route('live');
        } else {
            $this->error = "Los datos ingresados son incorrectos";
        }
    }

    public function render() {
        return view('livewire.auth.login');
    }
}
