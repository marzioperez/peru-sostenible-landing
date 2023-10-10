<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Question extends Model {

    protected  $fillable = [
        'user_id',
        'question',
        'answer',
        'admin_id',
        'schedule_activity_id'
    ];

    public function user(): HasOne {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function admin(): HasOne {
        return $this->hasOne(Admin::class, 'id', 'admin_id');
    }

    public function activity(): HasOne {
        return $this->hasOne(ScheduleActivity::class, 'id', 'schedule_activity_id');
    }
}
