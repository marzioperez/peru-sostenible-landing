<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScheduleActivity extends Model {

    use SoftDeletes;

    protected $fillable = [
        'title',
        'start',
        'end',
        'embed',
        'add_event_id',
        'speaker_id',
        'schedule_day_id'
    ];

    public function speaker(): HasOne {
        return $this->hasOne(Speaker::class, 'id', 'speaker_id');
    }

}
