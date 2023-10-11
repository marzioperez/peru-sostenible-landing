<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoginLog extends Model {

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'schedule_activity_id'
    ];

    public function user(): HasOne {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function activity(): HasOne {
        return $this->hasOne(ScheduleActivity::class, 'id', 'schedule_activity_id');
    }
}
