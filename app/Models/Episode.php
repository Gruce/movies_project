<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

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
}
