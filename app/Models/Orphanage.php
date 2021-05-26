<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Orphanage extends Model implements Viewable, HasMedia
{
    use HasFactory;
    use InteractsWithViews;
    use InteractsWithMedia;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'datas' => 'array',
    ];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
