<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaboration extends Model
{
    use HasFactory;

    public function collaborationable()
    {
        return $this->morphTo();
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
