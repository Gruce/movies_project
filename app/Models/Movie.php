<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Like;

class Movie extends Model
{
    use HasFactory;

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

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }



    //accessor and mutator

    protected function likesCount(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->likes()->where('type',true)->count(),
        );
    }
    protected function dislikesCount(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->likes()->where('type',false)->count(),
        );
    }

    //function

    public function like($state = true)
    {

        $likes = $this->with('likes')->whereHas('likes', function ($query) {
            return $query->where('user_id', auth()->id());
        });
        if ($likes->count() <= 0) {
            if ($likes->likes()->first()->type) {
                if ($state) {
                    $likes->likes()->first()->delete();
                } else {
                    $like = new Like;
                    $like->user_id = auth()->id();
                    $this->likes()->save($like);
                }
            }else{
                if ($state) {
                    $like = new Like;
                    $like->type=false;
                    $like->user_id = auth()->id();
                    $this->likes()->save($like);
                } else {
                    $likes->likes()->first()->delete();
                }
            }
        }
    }
}
