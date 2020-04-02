<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MobileHome extends Model implements HasMedia
{
    use InteractsWithMedia;

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    protected $fillable = ['show_on_home', 'active'];

    // public function setFeaturesAttribute($value)
    // {
    //     return json_encode($value);
    // }
    //
    public function getFeaturesAttribute($value)
    {
        return json_decode($value);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
          ->width(100)
          ->height(100)
          ->sharpen(10);
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('thumb')
            ->singleFile();
    }

    // public function registerMediaCollections(): void
    // {
    //     $this->addMediaCollection('gallery');
    // }
}
