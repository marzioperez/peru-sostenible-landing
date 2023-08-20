<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Allie extends Model implements Sortable, HasMedia {
    use SoftDeletes, SortableTrait, InteractsWithMedia;

    protected $fillable = [
        'name',
        'order',
        'phone',
        'facebook_url',
        'linkedin_url',
        'twitter_url',
        'instagram_url',
        'email_url',
        'whatsapp_url',
        'iframe',
        'biography',
        'allie_category_id'
    ];

    protected $appends = ['image_url'];

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true
    ];

    public function category(): HasOne {
        return $this->hasOne(AlliesCategory::class, 'id', 'allie_category_id');
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
}
