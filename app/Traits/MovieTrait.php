<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait MovieTrait {
    public function uploadCoverPath($file){
        $ext = $file->extension();
        $name = Str::random(10) . '.' . $ext;
        $file_path = 'movies/covers/' ;
        $file->storeAs('public/' . $file_path, $name);
        $file_path .= $name;
        return $file_path;
    }

    public function uploadSliderPath($file){
        $ext = $file->extension();
        $name = Str::random(10) . '.' . $ext;
        $file_path = 'movies/url_sliders/' ;
        $file->storeAs('public/' . $file_path, $name);
        $file_path .= $name;
        return $file_path;
    }

    public function uploadFilesPaths($files){
        $files_paths = [];
        foreach ($files as $file) {
            $ext = $file->extension();
            $name = Str::random(10) . '.' . $ext;
            $file_path = 'movies/files/' ;
            $file->storeAs('public/' . $file_path, $name);
            array_push($files_paths, $file_path . $name);
        }
        return $files_paths;
    }
}
