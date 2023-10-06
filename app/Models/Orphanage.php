<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\City;
use App\Models\Donation;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'data_identity' => 'array',
        'data_identity_promoter' => 'array',
        'data_address' => 'array',
        'data_financial_infos' => 'array',
        'data_stats' => 'array',
        'data_education' => 'array',
        'data_needs' => 'array',
        'data_projects' => 'array',
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

    public function responsable() : BelongsTo
    {
        return $this->belongsTo(User::class, 'responsable_id');
    }
}
