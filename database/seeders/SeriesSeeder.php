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
        $series = Series::create([
            'name' => 'Attack on Titan',
            'description' => 'After his hometown is destroyed and his mother is killed, young Eren Jaeger vows to cleanse the earth of the giant humanoid Titans that have brought humanity to the brink of extinction.',
            'rating' => 9.1,
        ]);

        $series->genres()->attach([1, 10, 11]);
        // ID 2
        $series = Series::create([
            'name' => 'Breaking bad',
            'description' => 'After his hometown is destroyed and his mother is killed, young Eren Jaeger vows to cleanse the earth of the giant humanoid Titans that have brought humanity to the brink of extinction.',
            'rating' => 10.0,
        ]);

        $series->genres()->attach([1, 10, 11]);
        // ID 3
        $series = Series::create([
            'name' => 'GOT',
            'description' => 'After his hometown is destroyed and his mother is killed, young Eren Jaeger vows to cleanse the earth of the giant humanoid Titans that have brought humanity to the brink of extinction.',
            'rating' => 5.1,
        ]);

        $series->genres()->attach([1, 10, 11]);
        // ID 4
        $series = Series::create([
            'name' => 'Forever',
            'description' => 'After his hometown is destroyed and his mother is killed, young Eren Jaeger vows to cleanse the earth of the giant humanoid Titans that have brought humanity to the brink of extinction.',
            'rating' => 7.1,
        ]);

        $series->genres()->attach([1, 10, 11]);
    }
}
