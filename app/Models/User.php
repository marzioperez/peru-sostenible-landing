<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const COMMITMENTS = [
        'Futuro', 'Impacto', 'Gestión integral', 'Equilibrio', 'Articulación',
        'Resiliencia', 'Triple impacto', 'Balance', 'Medio ambiente',
        'Trascendencia', 'Valor compartido', 'Enfoque sistémico'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'company',
        'position',
        'email',
        'commitments',
        'password',
        'token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'commitments' => 'array'
    ];

    protected $appends = [
        'initials',
        'full_name',
    ];

    public function getInitialsAttribute() {
        $name = $this->full_name;
        $name_array = explode(' ', trim($name));
        $firstWord = $name_array[0];
        $lastWord = $name_array[count($name_array)-1];
        return mb_substr($firstWord[0],0,1) . mb_substr($lastWord[0],0,1);
    }

    public function getFullNameAttribute() {
        return html_entity_decode(trim($this->first_name . ' ' . $this->last_name));
    }
}
