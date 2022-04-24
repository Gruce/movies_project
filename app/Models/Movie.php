<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\{
    Like,
    File,
    Cover,
    Favourite,
    Queue,
    Imdb,
};

class Movie extends Model
{
    use HasFactory;

    protected $appends = ['rating_five', 'likes_count', 'dislikes_count', 'cover_url', 'slider_url' , 'imdb_url'];
    protected $fillable = ['name', 'description', 'rating', 'duration', 'release_date'];

    /****************************************************/
    /******************* RELATIONSHIPS ******************/
    /****************************************************/

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function cover()
    {
        return $this->morphOne(Cover::class, 'coverable');
    }

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function favourites()
    {
        return $this->morphToMany(Favourite::class, 'favouriteables');
    }

    public function queues()
    {
        return $this->morphToMany(Queue::class, 'queuetables');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function imdb()
    {
        return $this->morphOne(Imdb::class, 'imdbable');
    }



    /***********************************************************/
    /******************* ACCESSOR AND MUTATOR ******************/
    /***********************************************************/

    protected function coverUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                $url = $this->cover->url ?? null;
                if (filter_var($url, FILTER_VALIDATE_URL))
                    return $url;
                return asset('storage/' . $url);
            },
            set: function ($value) {
                $this->cover()->updateOrCreate(['url' => $value]);
            }
        );
    }

    protected function sliderUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                $url = $this->cover->url_slider ?? null;
                if (filter_var($url, FILTER_VALIDATE_URL))
                    return $url;
                return asset('storage/' . $url);
            },
            set: function ($value) {
                $this->cover()->updateOrCreate(['url_slider' => $value]);
            }
        );
    }

    protected function likesCount(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->likes()->where('type', true)->count(),
        );
    }

    protected function dislikesCount(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->likes()->where('type', false)->count(),
        );
    }

    protected function ratingFive(): Attribute
    {
        return Attribute::make(
            get: fn () => round($this->rating / 2),
        );
    }

    protected function imdbUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                 return $this->imdb->url ?? null;
                
            },
        );
    }


    /************************************************/
    /******************* FUNCTIONS ******************/
    /************************************************/

    public function add($data)
    {
        $movie = Movie::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'rating' => $data['rating'],
            'duration' => $data['duration'],
            'release_date' => $data['release_date'],
        ]);
        
        $movie->genres()->attach($data['genres']);

        foreach ($data['files'] as $file_path) {
            $file = new File;
            $file->path = $file_path;
            $movie->files()->save($file);
        }

        $imdb = new Imdb();
        $imdb->url = $data['imdb'];
        $movie->imdb()->save($imdb);

        $cover = new Cover;
        $cover->url = $data['cover'];
        $cover->url_slider = $data['url_slider'];
        $movie->cover()->save($cover);
    }

    public function favourite($state)
    {
        if (!$state) {
            $this->favourites()->where('user_id', auth()->id())->detach();
        } else {
            $favourite = new Favourite;
            $favourite->user_id = auth()->id();

            $this->favourites()->save($favourite);
        }
    }

    public function queue($state)
    {
        if (!$state) {
            $this->queues()->where('user_id', auth()->id())->detach();
        } else {
            $queue = new Queue;
            $queue->user_id = auth()->id();

            $this->queues()->save($queue);
        }
    }

    public function like($state = true)
    {
        // USER HAS LIKE ON THIS MOVIE
        $like = $this->likes()->where('user_id', auth()->id());
        if ($like->exists()) {
            // HAS LIKE
            if ($like->first()->type == $state) {
                // IF LIKE IS THE SAME
                $like->delete();
            } else {
                // IF LIKE IS DIFFERENT
                $like->update(['type' => $state]);
            }
        } else {
            // HAS NO LIKE
            $like = new Like();
            $like->user_id = auth()->id();
            $like->type = $state;
            $this->likes()->save($like);
        }
    }

    public function liked($state)
    {
        return $this->likes()->where('user_id', auth()->id())->where('type', $state)->exists();
    }

    public function favourited()
    {
        return $this->favourites()->where('user_id', auth()->id())->exists();
    }
    public function queued()
    {
        return $this->queues()->where('user_id', auth()->id())->exists();
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
