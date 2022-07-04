<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => "romanzo distopico"
        ]);        
        DB::table('genres')->insert([
            'name' => "romanzo satirico"
        ]);
        DB::table('genres')->insert([
            'name' => "romanzo fantasy"
        ]);
        DB::table('genres')->insert([
            'name' => "romanzo picaresco"
        ]);
        DB::table('genres')->insert([
            'name' => "romanzo d'avventura"
        ]);
    }
}
