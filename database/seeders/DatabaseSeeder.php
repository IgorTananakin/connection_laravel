<?php

namespace Database\Seeders;
use App\Models\Director;
use App\Models\Film;
use App\Models\Author;
use App\Models\Book;
use App\Models\Cinema;
use App\Models\Movie;
use App\Models\CinemaMovie;
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
        // \App\Models\User::factory(10)->create();
        // Director::factory(30)->create();
        // Film::factory(30)->create();
        // Author::factory(5)->create();
        // Book::factory(50)->create();
        // Cinema::factory(8)->create();
        // Movie::factory(30)->create();
        
        CinemaMovie::factory(50)->create();
    }
}
