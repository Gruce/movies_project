<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Season;
use App\Models\Episode;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Series extends Model
{
    use HasFactory;

    protected $appends = ['rating_five'];


    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function seasons()
    {
        return $this->hasMany(Season::class);
    }
    
    /***********************************************************/
    /******************* ACCESSOR AND MUTATOR ******************/
    /***********************************************************/

    protected function ratingFive(): Attribute
    {
        return Attribute::make(
            get: fn () => round($this->rating / 2),
        );
    }

    protected function firstSeason(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->seasons->first(),
        );
    }




    /************************************************/
    /******************* FUNCTIONS ******************/
    /************************************************/


    public function add($data)
    {
        /* USING TRANSACTIONS *//*
        $data = [
            'series_id' => $series->id,
            'season_id' => $season->id,

            'series_name' => $data['series_name'],
            'series_description' => $data['series_description'],
            'series_rating' => $data['series_rating'],
            'series_genres' => $data['series_genres'],

            'season_name' => $data['season_name'],
            'season_number' => $data['season_number'],

            'episode_name' => $data['episode_name'],
            'episode_number' => $data['episode_number'],
            'episode_release_date' => $data['episode_release_date'],

            'files' => $data['files'],
            'cover' => $data['cover']
        ]
        */
        $series = null;
        $season = null;

        // SERIES CREATION
        if (isset($data['series_id'])) {
            // IF SERIES EXISTS
            $series = Series::findOrFail($data['series_id']);
        } else {
            // IF SERIES DOES NOT EXIST
            $series = Series::create([
                'name' => $data['series_name'],
                'description' => $data['series_description'],
                'rating' => $data['series_rating'],
            ]);
            $series->genres()->attach($data['series_genres']);
        }

        if (isset($data['season_id'])) {
            // IF SEASON EXISTS
            $season = Season::findOrFail($data['season_id']);
        } else {
            // IF SEASON DOES NOT EXIST
            $season = Season::create([
                'series_id' => $series->id,
                'name' => $data['season_name'],
                'number' => $data['season_number'],
            ]);
        }

        // EPISODE CREATION
        $episode = Episode::create([
            'season_id' => $season->id,
            'name' => $data['episode_name'],
            'number' => $data['episode_number'],
            'release_date' => $data['episode_release_date'],
        ]);

        foreach ($data['files'] as $file_path) {
            $file = new File;
            $file->path = $file_path;
            $episode->files()->save($file);
        }

        $cover = new Cover;
        $cover->url = $data['cover'];
        $episode->cover()->save($cover);
    }


    /****************************************************/
    /******************* SCOPES *************************/
    /****************************************************/

    public function scopeGenre($query, $genre_id)
    {
        if ($genre_id == null)
            return $query;
        return $query->whereHas('genres', function ($query) use ($genre_id) {
            $query->where('genre_id', $genre_id);
        });
    }


}
