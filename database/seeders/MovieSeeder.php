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
            'rating' => 7.5,
            'duration' => 138,
            'release_date' => '2021',

            'genres' => [1, 3, 10],
            'cover' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRhotZZ36j8rndD5i2OG1scehoqeH_m7uLmohqF-yDDfR8X7kFk',
            'files' => [
                'https://www.youtube.com/watch?v=7QKqQY-_zj8'
            ],
        ]);
    }
}
