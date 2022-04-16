<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function genres(){
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


    //function

    public function like()
    {
        $this->increment('likes');
    }

    public function dislike()
    {
        $this->increment('dislikes');
    }
}
