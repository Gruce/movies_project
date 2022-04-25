<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    public function collaboration()
    {
        return $this->belongsTo(Collaboration::class);   
    }

    public function user()
    {
        return $this->belongsTo(User::class);   
    }
}
