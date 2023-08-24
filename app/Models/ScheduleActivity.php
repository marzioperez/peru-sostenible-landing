<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScheduleActivity extends Model {

    use SoftDeletes;
    const SPEAKER = 'SPEAKER';
    const PANELIST_GROUP = 'PANELIST_GROUP';

    protected $fillable = [
        'title',
        'start',
        'end',
        'embed',
        'add_event_id',
        'presentation_type',
        'speaker_id',
        'panelist_group_id',
        'schedule_day_id'
    ];

    public function speaker(): HasOne {
        return $this->hasOne(Speaker::class, 'id', 'speaker_id');
    }

    public function panelist_group(): HasOne {
        return $this->hasOne(PanelistGroup::class, 'id', 'panelist_group_id');
    }

}
