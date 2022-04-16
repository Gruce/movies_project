<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            GenreSeeder::class,
            MovieSeeder::class,
            SeriesSeeder::class,
            SeasonSeeder::class,
            EpisodeSeeder::class,
            FileSeeder::class,
            CoverSeeder::class,
            FavouriteSeeder::class,
        ]);
    }
}
