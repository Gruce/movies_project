<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\{
    Like,
    File,
    Cover,
    Favourite
};

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


    /************************************************/
    /******************* FUNCTIONS ******************/
    /************************************************/

    public function add($data){
        $movie = Movie::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'rating' => $data['rating'],
            'duration' => $data['duration'],
            'release_date' => $data['release_date'],
        ]);

        $movie->genres()->attach($data['genres']);

        foreach ($data['files'] as $file_path){
            $file = new File;
            $file->path = $file_path;
            $movie->files()->save($file);
        }

        $cover = new Cover;
        $cover->url = $data['cover'];
        $movie->cover()->save($cover);
    }

    public function favourite(){
        $favourite = new Favourite;
        $favourite->user_id = auth()->id();

        $this->favourites()->save($favourite);
    }

    public function like($state = true)
    {
        // USER HAS LIKE ON THIS MOVIE
        $like = $this->likes()->where('user_id', auth()->id());
        if ($like->exists()){
            // HAS LIKE
            if ($like->first()->type == $state){
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

    public function liked($state){
        return $this->likes()->where('user_id', auth()->id())->where('type', $state)->exists();
    }
}
