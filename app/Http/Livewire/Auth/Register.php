<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component {

    public $first_name, $last_name, $email, $phone, $company, $position, $accept_terms;
    public $commitments = [];
    public $commitments_options = User::COMMITMENTS;
    public $show_thanks = false;
    public $error_commitments = null;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users',
        'phone' => 'required|numeric',
        "accept_terms" => "required"
    ];

    protected $messages = [
        'first_name.required' => "Campo obligatorio",
        'last_name.required' => "Campo obligatorio",
        'email.required' => "Campo obligatorio",
        'email.email' => "Campo incorrecto",
        'email.unique' => "El correo ya existe",
        'phone.required' => "Campo obligatorio",
        "accept_terms.required" => "Debes aceptar los términos y condiciones"
    ];

    public function process() {
        $this->error_commitments = null;
        if (count($this->commitments) <= 0) {
            $this->error_commitments = 'Selecciona más de una palabra';
        }

        $this->validate();
        $token = Hash::make(time());
        User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'company' => $this->company,
            'position' => $this->position,
            'email' => $this->email,
            'commitments' => $this->commitments,
            'password' => '123456',
            'token' => $token
        ]);

        $this->show_thanks = true;
    }

    public function setCommit($type): void {
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
