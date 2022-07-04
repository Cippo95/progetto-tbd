<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'name' => "George",
            'surname' => "Orwell"
        ]);
        DB::table('authors')->insert([
            'name' => "J.R.R.",
            'surname' => "Tolkien"
        ]);
        DB::table('authors')->insert([
            'name' => "Miguel",
            'surname' => "de Cervantes"
        ]);
        DB::table('authors')->insert([
            'name' => "J.K.",
            'surname' => "Rowling"
        ]);
        DB::table('authors')->insert([
            'name' => "Robert Luis",
            'surname' => "Stevenson"
        ]);
    }
}
