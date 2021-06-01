<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PageSection extends Model implements HasMedia
{
    use HasFactory;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    use HasMediaThumbsTrait;
    use ProcessMediaTrait;

    protected $fillable = [
        'page_id',

        'section',
        'title',
        'subtitle',
        'description',
        'button',
    ];

    /* ************************ MEDIA ************************ */

    /**
     * Register media collections
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('banner')
            ->accepts('image/*')
            ->maxNumberOfFiles(1);

        $this->addMediaCollection('gallery')
            ->accepts('image/*')
            ->maxNumberOfFiles(3);
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

        $this->addMediaConversion('thumb_75')
            ->width(75)
            ->height(75)
            ->fit('crop', 75, 75)
            ->optimize()
            ->performOnCollections('gallery')
            ->nonQueued();

        $this->addMediaConversion('thumb_150')
            ->width(150)
            ->height(150)
            ->fit('crop', 150, 150)
            ->optimize()
            ->performOnCollections('gallery')
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
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
