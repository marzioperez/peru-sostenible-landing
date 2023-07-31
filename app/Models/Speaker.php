<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Speaker extends Model implements HasMedia {

    use HasFactory, SoftDeletes, InteractsWithMedia;

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
        'instagram_url',
        'email_url',
        'whatsapp_url',
        'user_id',
        'show'
    ];

    protected $appends = ['name', 'image_url'];

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
}
