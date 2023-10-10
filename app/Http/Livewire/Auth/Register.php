<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Register extends Component {

    public $first_name, $last_name, $email, $phone, $company, $position, $accept_terms, $accept_policy_data;
    public $commitments = [];
    public $commitments_options = User::COMMITMENTS;
    public $show_thanks = false;
    public $error_commitments = null;
    public bool $in_live;

    public function mount($in_live) {
        $this->in_live = $in_live;
    }

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users',
        'phone' => 'required|numeric',
        "accept_terms" => "accepted",
        "accept_policy_data" => "accepted"
    ];

    protected $messages = [
        'first_name.required' => "Campo obligatorio",
        'last_name.required' => "Campo obligatorio",
        'email.required' => "Campo obligatorio",
        'email.email' => "Campo incorrecto",
        'email.unique' => "El correo ya existe",
        'phone.required' => "Campo obligatorio",
        "accept_terms.accepted" => "Debes aceptar los términos y condiciones y políticas de privacidad",
        'accept_policy_data.accepted' => 'Debes aceptar la política de tratamiento de datos personales'
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
            'token' => $token,
            'accept_terms' => $this->accept_terms,
            'accept_policy_data' => $this->accept_policy_data
        ]);

        if ($this->in_live) {
            if (Auth::attempt(['email' => $this->email, 'password' => '123456'])){
                redirect()->route('live');
            }
        }

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
