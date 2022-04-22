<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\{
    Like,
    
};


class Episode extends Model
{
    use HasFactory;

    protected $appends = ['likes_count', 'dislikes_count', 'cover_url', 'slider_url'];


    public function season()
    {
        return $this->belongsTo(Season::class);
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



    /***********************************************************/
    /******************* ACCESSOR AND MUTATOR ******************/
    /***********************************************************/

    protected function coverUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                $url = $this->cover->url ?? null;
                if(filter_var($url , FILTER_VALIDATE_URL))
                    return $url;
                return asset('storage/' . $this->cover->url);
            }
        );
    }

    protected function sliderUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                $url = $this->cover->url_slider ?? null;
                if(filter_var($url , FILTER_VALIDATE_URL))
                    return $url;
                return asset('storage/' . $this->cover->url_slider);
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

    /************************************************/
    /******************* FUNCTIONS ******************/
    /************************************************/

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
}

