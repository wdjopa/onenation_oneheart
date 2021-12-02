<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Orphanage extends Model implements Viewable, HasMedia, Searchable
{
    use HasFactory, InteractsWithViews, InteractsWithMedia;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'datas' => 'array',
    ];

     public function getSearchResult(): SearchResult
     {
        $url = route('public.orphanages.details', ["orphanage_slug" => $this->slug]);
     
         return new \Spatie\Searchable\SearchResult(
            $this,
            $this->name,
            $url
         );
     }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function dons()
    {
        return $this->hasMany(Donation::class);
    }
}
