<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class News extends Model implements HasMedia
{
    use HasFactory;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    use HasMediaThumbsTrait;
    use ProcessMediaTrait;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'type',
        'description',
        'published_at',
    
    ];
    
    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/news/'.$this->getKey());
    }

    /* ************************ MEDIA ************************ */

    /**
     * Register media collections
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('banner')
            ->accepts('image/*')
            ->maxNumberOfFiles(1);
    }

    /**
     * Register media conversions
     *
     * @param Media|null $media
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->autoRegisterThumb200();

        $this->addMediaConversion('thumb_75')
            ->width(75)
            ->height(75)
            ->fit('crop', 75, 75)
            ->optimize()
            ->performOnCollections('banner')
            ->nonQueued();

        $this->addMediaConversion('thumb_150')
            ->width(150)
            ->height(150)
            ->fit('crop', 150, 150)
            ->optimize()
            ->performOnCollections('banner')
            ->nonQueued();
    }

    /**
     * Auto register thumb overridden
     */
    public function autoRegisterThumb200()
    {
        $this->getMediaCollections()->filter->isImage()->each(function ($mediaCollection) {
            $this->addMediaConversion('thumb_200')
                ->width(200)
                ->height(200)
                ->fit('crop', 200, 200)
                ->optimize()
                ->performOnCollections($mediaCollection->getName())
                ->nonQueued();
        });
    }

    /* ************************ RELATIONS ************************ */
}
