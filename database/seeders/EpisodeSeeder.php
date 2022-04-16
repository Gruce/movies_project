<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Episode;
use App\Models\File;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ID 1
        $series = Episode::create([
            'name' => 'The Fall of Shiganshina',
            'release_date' => '2013',
            'season_id' => 1,
        ]);

        $file = new File;
        $file->path = 'https://www.youtube.com/watch?v=7QKqQY-_zj8';
        $series->files()->save($file);

    }
}
