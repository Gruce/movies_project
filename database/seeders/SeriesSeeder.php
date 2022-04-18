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

        // ID 2
        $series = new Series;
        $series->add([
            'series_name' => 'Death Note',
            'series_description' => 'The story of Light Yagami, a high school student who uses a notebook to kill people.',
            'series_rating' => 8.9,
            'series_genres' => [1, 10, 11],

            'season_name' => 'Season 1',
            'season_number' => 1,

            'episode_name' => 'The Phantom Note',
            'episode_release_date' => '2006',

            'files' => [
                'https://www.youtube.com/watch?v=7QKqQY-_zj8'
            ],

            'cover' => 'https://upload.wikimedia.org/wikipedia/en/6/6f/Death_Note_Vol_1.jpg'
        ]);

        // ID 3
        $series = new Series;
        $series->add([
            'series_name' => 'Fullmetal Alchemist',
            'series_description' => 'Alchemy is a magical world where humans and monsters coexist. When an accident leads to the birth of a child who is discovered to be the descendant of an alchemist, he must leave home and embark on a journey to find his family and restore peace to the world.',
            'series_rating' => 9.1,
            'series_genres' => [1, 10, 11],

            'season_name' => 'Season 1',
            'season_number' => 1,

            'episode_name' => 'The Philosopher\'s Stone',
            'episode_release_date' => '2009',

            'files' => [
                'https://www.youtube.com/watch?v=7QKqQY-_zj8'
            ],

            'cover' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcScQ3SvxqLuT1el0OmUisC1YiBpUhRVJQk8OeBW7LM-fpE5I4UQ'
        ]);

        // ID 4

        $series = new Series;
        $series->add([
            'series_name' => 'Naruto',
            'series_description' => 'Naruto is a Japanese manga series written and illustrated by Masashi Kishimoto. The story follows the adventures of the shinobi, who are clones of the original ninja, who are chosen by their village to become Hokage, the village\'s leader. The story takes place in Naruto\'s village, Konoha, and the main character, Naruto, is named after the ninja who is chosen by Konoha\'s village to be Hokage.',
            'series_rating' => 9.1,
            'series_genres' => [1, 10, 11],

            'season_name' => 'Season 1',
            'season_number' => 1,

            'episode_name' => 'The Hokage\'s Secret',
            'episode_release_date' => '2009',

            'files' => [
                'https://www.youtube.com/watch?v=7QKqQY-_zj8'
            ],

            'cover' => 'https://upload.wikimedia.org/wikipedia/en/9/94/NarutoCoverTankobon1.jpg'
        ]);

    }
}
