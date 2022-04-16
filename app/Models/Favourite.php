<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function movies()
    {
        return $this->morphedByMany(Movie::class, 'favouriteables');
    }

    public function episodes()
    {
        return $this->morphedByMany(Episode::class, 'favouriteables');
    }
}
