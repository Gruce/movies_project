<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function movies()
    {
        return $this->morphedByMany(Movie::class, 'queuetables');
    }

    public function episodes()
    {
        return $this->morphedByMany(Episode::class, 'queuetables');
    }
}
