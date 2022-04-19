<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\File;
use App\Models\Cover;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ID 1
        $movie = new Movie;
        $movie->add([
            'name' => 'The Tomorrow War',
            'description' => 'A family man is drafted to fight in a future war where the fate of humanity relies on his ability to confront the past.',
            'rating' => 3.5,
            'duration' => 138,
            'release_date' => '2021',

            'genres' => [5, 3, 10],
            'cover' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRhotZZ36j8rndD5i2OG1scehoqeH_m7uLmohqF-yDDfR8X7kFk',
            'files' => [
                'https://www.youtube.com/watch?v=7QKqQY-_zj8'
            ],
        ]);
        // ID 2
        $movie = new Movie;
        $movie->add([
            'name' => 'Fury',
            'description' => 'April, 1945. As the Allies make their final push in the European Theatre, a battle-hardened Army sergeant named Wardaddy commands a Sherman tank and his five-man crew on a deadly mission behind enemy lines. Outnumbered, out-gunned, and with a rookie soldier thrust into their platoon, Wardaddy and his men face overwhelming odds in their heroic attempts to strike at the heart of Nazi Germany.',
            'rating' => 7.6,
            'duration' => 134,
            'release_date' => '2014',

            'genres' => [6, 3, 12],
            'cover' => 'https://m.media-amazon.com/images/M/MV5BMjA4MDU0NTUyN15BMl5BanBnXkFtZTgwMzQxMzY4MjE@._V1_.jpg',
            'files' => [
                'https://youtu.be/SKu5lGfRBxc'
            ],
        ]);
        // ID 3
        $movie = new Movie;
        $movie->add([
            'name' => 'Hacksaw Ridge',
            'description' => 'WWII American Army Medic Desmond T. Doss, who served during the Battle of Okinawa, refuses to kill people, and becomes the first man in American history to receive the Medal of Honor without firing a shot.',
            'rating' => 5.1,
            'duration' => 139,
            'release_date' => '2016',

            'genres' => [3, 13, 12],
            'cover' => 'https://cnth2.shabakaty.com/poster-images/4B38A194-B47E-4AF5-6202-411A0E4ED649_poster_medium_thumb.jpg',
            'files' => [
                'https://youtu.be/sslCRVx7nPQ'
            ],
        ]);
        // ID 4
        $movie = new Movie;
        $movie->add([
            'name' => 'Hidden Figures',
            'description' => 'The story of a team of African-American women mathematicians who served a vital role in NASA during the early years of the US space program.',
            'rating' => 7.8,
            'duration' => 126,
            'release_date' => '2016',

            'genres' => [1, 8, 14],
            'cover' => 'https://cnth2.shabakaty.com/poster-images/4D6C5193-8540-BF02-01BF-E36340A9AB27_poster_medium_thumb.png',
            'files' => [
                'https://youtu.be/RK8xHq6dfAo'
            ],
        ]);
        // ID 5
        $movie = new Movie;
        $movie->add([
            'name' => 'Spider-Man: No Way Home',
            'description' => 'With Spider-Mans identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.',
            'rating' => 6.7,
            'duration' => 158,
            'release_date' => '2021',

            'genres' => [1, 4, 10],
            'cover' => 'https://cnth2.shabakaty.com/poster-images/1EF4E9FB-EAAF-3FCA-9E69-CB5C1DB5A8FA_poster_medium_thumb.jpg',
            'files' => [
                'https://www.youtube.com/watch?v=JfVOs4VSpmA'
            ],
        ]);
        // ID 6
        $movie = new Movie;
        $movie->add([
            'name' => 'The Lion King',
            'description' => 'Simba idolises his father, King Mufasa, and takes to heart his own royal destiny. But not everyone in the kingdom celebrates the new cubs arrival with equal enthusiasm.',
            'rating' => 7.1,
            'duration' => 118,
            'release_date' => '2019',

            'genres' => [1, 3, 10],
            'cover' => 'https://upload.wikimedia.org/wikipedia/en/thumb/3/3d/The_Lion_King_poster.jpg/220px-The_Lion_King_poster.jpg',
            'files' => [
                'https://youtu.be/4Cbfb0eeN9E'
            ],
        ]);
        // ID 7
        $movie = new Movie;
        $movie->add([
            'name' => 'The Secret Life of Pets 2',
            'description' => 'fdgdfgew family turns out to be a secret society run by evil genius Mr. Peterman, who puts his mysterious ways to use pets to his advantage.',
            'rating' => 6.7,
            'duration' => 98,
            'release_date' => '2019',

            'genres' => [1, 4, 10],
            'cover' => 'https://upload.wikimedia.org/wikipedia/en/thumb/e/eb/The_Secret_Life_of_Pets_2_%282019%29_Final_Poster.jpg/220px-The_Secret_Life_of_Pets_2_%282019%29_Final_Poster.jpg',
            'files' => [
                'https://youtu.be/4Cbfb0eeN9E'
            ],
        ]);
        // ID 8
        $movie = new Movie;
        $movie->add([
            'name' => 'The Secret Life of Pets 3',
            'description' => 'fdgdfgew family turns out to be a secret society run by evil genius Mr. Peterman, who puts his mysterious ways to use pets to his advantage.',
            'rating' => 6.7,
            'duration' => 98,
            'release_date' => '2019',

            'genres' => [1, 3, 10],
            'cover' => 'https://m.media-amazon.com/images/M/MV5BNWJiYmU4NTItZjAyZi00OGQxLTkwNmQtOGE5ODgyYTg0MzY1XkEyXkFqcGdeQXVyMTEzMjQzMDM1._V1_.jpg',
            'files' => [
                'https://youtu.be/4Cbfb0eeN9E'
            ],
        ]);

        // ID 9
        $movie = new Movie;
        $movie->add([
            'name' => 'The Secret Life of Pets 4',
            'description' => 'fdgdfgew family turns out to be a secret society run by evil genius Mr. Peterman, who puts his mysterious ways to use pets to his advantage.',
            'rating' => 6.7,
            'duration' => 98,
            'release_date' => '2019',

            'genres' => [1, 3, 12],
            'cover' => 'https://img.wattpad.com/cover/216342125-288-k170397.jpg',
            'files' => [
                'https://youtu.be/4Cbfb0eeN9E'
            ],
        ]);
        
    }
}
