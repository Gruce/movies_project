<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imdb extends Model
{
    use HasFactory;
    
    public function imdbable()
    {
        return $this->morphTo();
    }
}
