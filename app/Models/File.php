<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class File extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'date_received',
        'file_path',
        'file_name',
        'thumb'
    ];

    protected $casts = [
        'date_received' => 'date',
    ];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('thumb')
            ->fit(Fit::Contain, 300, 300)
            ->nonOptimized()
            ->sharpen(10)
            ->nonQueued();
    }
}
