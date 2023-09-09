<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Video extends Model implements HasMedia, Sortable {

    use SoftDeletes, InteractsWithMedia, SortableTrait;

    protected $fillable = [
        'title',
        'embed',
        'order',
        'videos_category_id'
    ];

    protected $appends = ['image_url'];

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true
    ];

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
}
