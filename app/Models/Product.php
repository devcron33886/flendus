<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;
    use Sluggable;

    public const STATUS_RADIO = [
        '0' => 'Not Available',
        '1' => 'Available',
    ];

    public $table = 'products';

    protected $appends = [
        'product_image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'slug',
        'price',
        'description',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 900, 900);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getProductImageAttribute()
    {
        $file = $this->getMedia('product_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }
    public function sluggable(): array
    {
        return [
            'slug'=>[
                'source'=>'name'
            ]

        ];
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
