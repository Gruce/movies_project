<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Series;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // ID 1
        $series = new Series;
        $series->add([
            'series_name' => 'Attack on Titan',
            'series_description' => 'After his hometown is destroyed and his mother is killed, young Eren Jaeger vows to cleanse the earth of the giant humanoid Titans that have brought humanity to the brink of extinction.',
            'series_rating' => 9.1,
            'series_genres' => [1, 10, 11],

            'season_name' => 'Season 1',
            'season_number' => 1,

            'episode_name' => 'The Fall of Shiganshina',
            'episode_release_date' => '2013',

            'files' => [
                'https://www.youtube.com/watch?v=7QKqQY-_zj8'
            ],

            'cover' => 'https://m.media-amazon.com/images/M/MV5BNzc5MTczNDQtNDFjNi00ZDU5LWFkNzItOTE1NzQzMzdhNzMxXkEyXkFqcGdeQXVyNTgyNTA4MjM@._V1_QL75_UX380_CR0,4,380,562_.jpg'
        ]);
        
    }
}
