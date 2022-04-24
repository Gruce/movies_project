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
            'episode_number' => '1',
            'episode_release_date' => '2013',

            'files' => [
                'https://www.youtube.com/watch?v=7QKqQY-_zj8'
            ],

            'cover' => 'https://m.media-amazon.com/images/M/MV5BNzc5MTczNDQtNDFjNi00ZDU5LWFkNzItOTE1NzQzMzdhNzMxXkEyXkFqcGdeQXVyNTgyNTA4MjM@._V1_QL75_UX380_CR0,4,380,562_.jpg',
            'url_slider' => 'https://imgix.bustle.com/uploads/image/2022/1/6/348ce53e-5b4f-4baa-b3da-ae1e5f85d90e-attack-on-titan-final-season-part-2-visual.webp?w=1200&h=630&fit=crop&crop=focalpoint&fm=jpg&fp-x=0.492&fp-y=0.3009',
            'imdb' =>'https://www.imdb.com/title/tt2560140',
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
            'episode_number' => '1',
            'episode_release_date' => '2006',

            'files' => [
                'https://www.youtube.com/watch?v=7QKqQY-_zj8'
            ],

            'cover' => 'https://upload.wikimedia.org/wikipedia/en/6/6f/Death_Note_Vol_1.jpg',
            'url_slider' => 'https://www.anime-internet.com/content/images/2021/10/Death-Note.jpg',
            'imdb' => 'https://www.imdb.com/title/tt0877057'
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
            'episode_number' => '1',
            'episode_release_date' => '2009',

            'files' => [
                'https://www.youtube.com/watch?v=7QKqQY-_zj8'
            ],

            'cover' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcScQ3SvxqLuT1el0OmUisC1YiBpUhRVJQk8OeBW7LM-fpE5I4UQ',
            'url_slider' => 'https://gamingonphone.com/wp-content/uploads/2021/12/Fullmetal-Alchemist-Mobile-Guide.jpg',
            'imdb' => 'https://www.imdb.com/title/tt0877057'


        ]);
        $series->add([
            'series_id' => 3,
            'season_id' => 3,

            'episode_name' => 'To Challenge the Sun',
            'episode_number' => '2',
            'episode_release_date' => '2009',

            'files' => [
                'https://www.youtube.com/watch?v=7QKqQY-_zj8'
            ],

            'cover' => 'https://m.media-amazon.com/images/M/MV5BMjIxNzU1MDg2OF5BMl5BanBnXkFtZTgwOTQwMzQ2MjE@._V1_UX224_CR0,0,224,126_AL_.jpg',
            'url_slider' => 'https://m.media-amazon.com/images/M/MV5BNzc5MTczNDQtNDFjNi00ZDU5LWFkNzItOTE1NzQzMzdhNzMxXkEyXkFqcGdeQXVyNTgyNTA4MjM@._V1_QL75_UX380_CR0,4,380,562_.jpg',
            'imdb' => 'https://www.imdb.com/title/tt0877057'


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
            'episode_number' => '1',
            'episode_release_date' => '2009',

            'files' => [
                'https://www.youtube.com/watch?v=7QKqQY-_zj8'
            ],

            'cover' => 'https://upload.wikimedia.org/wikipedia/en/9/94/NarutoCoverTankobon1.jpg',
            'url_slider' => 'https://freegametips.com/wp-content/uploads/2021/02/1613392885_Naruto-anime-where-to-watch-online-in-Spanish-all-seasons.jpg',
            'imdb' => 'https://www.imdb.com/title/tt0877057'


        ]);

    }
}
