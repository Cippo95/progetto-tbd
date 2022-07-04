<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => "1984",
            'author_id' => "1",
            'genre_id' => "1",
        ]);
        DB::table('books')->insert([
            'title' => "Animal Farm",
            'author_id' => "1",
            'genre_id' => "2",
        ]);
        DB::table('books')->insert([
            'title' => "La compagnia dell'anello",
            'author_id' => "2",
            'genre_id' => "3",
        ]);
        DB::table('books')->insert([
            'title' => "Le due torri",
            'author_id' => "2",
            'genre_id' => "3",
        ]);
        DB::table('books')->insert([
            'title' => "Il ritorno del re",
            'author_id' => "2",
            'genre_id' => "3",
        ]);
        DB::table('books')->insert([
            'title' => "Don Chisciotte della Mancia",
            'author_id' => "3",
            'genre_id' => "4",
        ]);
        DB::table('books')->insert([
            'title' => "Harry Potter e la pietra filosofale",
            'author_id' => "4",
            'genre_id' => "3",
        ]);
        DB::table('books')->insert([
            'title' => "L'isola del tesoro",
            'author_id' => "5",
            'genre_id' => "5",
        ]);
    }
}
