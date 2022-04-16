<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ID 1
        Genre::create([
            'name' => 'Action',
        ]);
        // ID 2
        Genre::create([
           'name' => 'Comedy',
        ]);
        // ID 3
        Genre::create([
           'name' => 'Drama',
        ]);
        // ID 4
        Genre::create([
           'name' => 'Fantasy',
        ]);
        // ID 5
        Genre::create([
           'name' => 'Horror',
        ]);
        // ID 6
        Genre::create([
           'name' => 'Mystery',
        ]);
        // ID 7
        Genre::create([
           'name' => 'Romance',
        ]);
        // ID 8
        Genre::create([
           'name' => 'Thriller',
        ]);
        // ID 9
        Genre::create([
            'name' => 'Western',
        ]);
        // ID 10
        Genre::create([
            'name' => 'Adventure',
        ]);
        // ID 11
        Genre::create([
            'name' => 'Animation',
        ]);
        // ID 12
        Genre::create([
            'name' => 'War',
        ]);
        // ID 13
        Genre::create([
            'name' => 'History',
        ]);
        // ID 14
        Genre::create([
            'name' => 'Biography',
        ]);
    }
}
