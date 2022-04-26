<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ID 1
        User::create([
            'name' => 'Admin',
            'type' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        // ID 2
        User::create([
            'name' => 'User',
            'type' => 0,
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        // ID 3
        User::create([
            'name' => 'manar',
            'type' => 0,
            'email' => 'manar@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
