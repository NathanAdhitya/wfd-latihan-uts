<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'movie_title' => 'The Shawshank Redemption',
                'duration' => 142,
                'release_date' => '1994-01-01',
            ],
            [
                'movie_title' => 'The Godfather',
                'duration' => 178,
                'release_date' => '1972-01-01',
            ],
            [
                'movie_title' => 'The Godfather: Part II',
                'duration' => 200,
                'release_date' => '1974-01-01',
            ],
            [
                'movie_title' => 'The Dark Knight',
                'duration' => 150,
                'release_date' => '2008-07-18',
            ],
            [
                'movie_title' => '12 Angry Men',
                'duration' => 96,
                'release_date' => '1957-06-08',
            ]
        ]);
    }
}
