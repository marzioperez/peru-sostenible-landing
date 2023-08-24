<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class SpeakerPanelistGroup extends Model implements Sortable {

    use HasFactory, SoftDeletes, SortableTrait;

    protected $fillable = [
        'speaker_id',
        'panelist_group_id',
        'order'
    ];

    public function speaker(): HasOne {
        return $this->hasOne(Speaker::class,'id', 'speaker_id');
    }

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true
    ];

}
