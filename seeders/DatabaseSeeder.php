<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        $authors = [
            ['f_name' => 'Tayray', 'l_name' => 'Jones', 'email' => 'taylay.jones@gmail.com', 'tel' => '859-389-4047'],
            ['f_name' => 'Arthur', 'l_name' => 'Ransome', 'email' => 'arthur.ransome@gmail.com', 'tel' => '216-798-9243'],
            ['f_name' => 'Paul', 'l_name' => 'Auster', 'email' => 'paul.auster@gmail.com', 'tel' => '620-757-7141']
        ];

        DB::table('authors')->insert($authors);

 
        $genres = [
            ['genre' => 'Action'],
            ['genre' => 'Adventure'],
            ['genre' => 'Horror']

            
        ];

        DB::table('genres')->insert($genres);

        $books = [
            ['title' => 'Dark horse', 'year' => 2002, 'isbn' => '0-2923-9813-1', 'page_no' => 450, 'genre_id' => 3],
            ['title' => 'Agent Jones', 'year' => 2007, 'isbn' => '0-8807-9083-0', 'page_no' => 500, 'genre_id' => 1],
            ['title' => 'Happy fellowship', 'year' => 1995, 'isbn' => '0-8813-6017-1', 'page_no' => 960, 'genre_id' => 2]
           

        ];

        DB::table('books')->insert($books);

        $users = [
            ['f_name' => 'Ivan', 'l_name' => 'Horvat', 'email' => 'ivan.horvat@gmail.com', 'username' => 'ihorvat', 'password' => 'jasamivanhorvat'],
            ['f_name' => 'Luka', 'l_name' => 'Horvat', 'email' => 'luka.horvat@gmail.com', 'username' => 'lhorvat', 'password' => 'jasamlukahorvat'],
            ['f_name' => 'Maja', 'l_name' => 'Majic', 'email' => 'maja.majic@gmail.com', 'username' => 'mmajic', 'password' => 'jasammajamajic']
            

        ];
        DB::table('users')->insert($users);

        $reviews = [
            ['book_id' => 2 , 'user_id' => 3, 'score' => 90, 'comment' => 'jako dobra knjiga'],
            ['book_id' => 1 , 'user_id' => 1, 'score' => 50, 'comment' => 'jako strasna knjiga'],
            ['book_id' => 3 , 'user_id' => 1, 'score' => 95, 'comment' => 'jako mi se svidja']

        ];

        DB::table('reviews')->insert($reviews);
    }
}
