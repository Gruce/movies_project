<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Season extends Model
{
    use HasFactory;

    public function series(){
        return $this->belongsTo(Series::class);
    }

    public function episodes(){
        return $this->hasMany(Episode::class);
    }




    protected function firstEpisode(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->episodes->first(),
        );
    }
}
