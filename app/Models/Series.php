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


    public function add($data){
        $series = Series::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'rating' => $data['rating'],
            'duration' => $data['duration'],
            'release_date' => $data['release_date'],
        ]);

        $series->genres()->attach($data['genres']);

        foreach ($data['files'] as $file_path){
            $file = new File;
            $file->path = $file_path;
            $series->files()->save($file);
        }

        $cover = new Cover;
        $cover->url = $data['cover'];
        $series->cover()->save($cover);
    }




}



    
