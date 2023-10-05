<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class ScheduleActivity extends Model implements Sortable {

    use SoftDeletes, SortableTrait;
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
        'schedule_day_id',
        'order'
    ];

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true
    ];

    public function speaker(): HasOne {
        return $this->hasOne(Speaker::class, 'id', 'speaker_id');
    }

    public function panelist_group(): HasOne {
        return $this->hasOne(PanelistGroup::class, 'id', 'panelist_group_id');
    }

}
