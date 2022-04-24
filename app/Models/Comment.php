<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Comment extends Model
{
    use HasFactory;
    public function commentable()
    {
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function collaboration()
    {
        return $this->belongsTo(Collaboration::class);
    }
    

    protected function body(): Attribute
    {
        return Attribute::make(
            get: function ($comment) {
                preg_match_all("/@[a-zA-Z0-9_]{1,15}[ ;.,]/", $comment, $usernames);
                $usernames = array_unique($usernames[0]);
                foreach ($usernames as $username){
                    $user = User::where('name', str_replace('@', '', $username))->first();
                    if ($user) 
                        $comment = str_replace($username, " <span class='text-red-400 font-semibold'>$username</span> ", $comment);
                }
                return $comment;
            },
        );
    }
}
