<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

}
