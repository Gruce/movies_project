<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }

    public function seasons(){
        return $this->hasMany(Season::class);
    }
}
