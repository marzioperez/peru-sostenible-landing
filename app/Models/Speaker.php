<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Speaker extends Model implements HasMedia, Sortable {

    use HasFactory, SoftDeletes, InteractsWithMedia, SortableTrait;

    protected $dates = ["deleted_at"];

    protected $fillable = [
        'first_name',
        'last_name',
        'position',
        'biography',
        'web_url',
        'country_id',
        'phone',
        'facebook_url',
        'linkedin_url',
        'twitter_url',
        'twitter_x_url',
        'instagram_url',
        'email_url',
        'whatsapp_url',
        'order'
    ];

    protected $appends = ['name', 'image_url'];

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true
    ];

    public function getNameAttribute() {
        return $this->first_name . " " . $this->last_name;
    }

    public function getImageUrlAttribute() {
        if ($this->getMedia('main')->count() > 0) {
            return $this->getMedia('main')->first()->getUrl();
        }
        return asset('img/default-speaker.png');
    }

    public function registerMediaConversions(Media $media = null): void {
        $this->addMediaConversion('thumb')->width(130)->height(130);
    }

    public function registerMediaCollections(): void {
        $this->addMediaCollection('main')->singleFile();
    }

    public function activities(): HasMany{
        return $this->hasMany(ScheduleActivity::class, 'speaker_id', 'id');
    }

    public function groups(): HasMany {
        return $this->hasMany(SpeakerPanelistGroup::class, 'speaker_id', 'id');
    }
}
