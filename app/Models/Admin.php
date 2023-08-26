<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable {

    use SoftDeletes, Notifiable;

    protected $guard = 'admin';
    protected $dates = ["deleted_at"];

    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'initials'
    ];

    public function getInitialsAttribute() {
        $name = $this->name;
        $name_array = explode(' ', trim($name));
        $firstWord = $name_array[0];
        $lastWord = $name_array[count($name_array)-1];
        return mb_substr($firstWord[0],0,1) . mb_substr($lastWord[0],0,1);
    }
}
