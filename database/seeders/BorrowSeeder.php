<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Borrow;
use Illuminate\Support\Str;

class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('borrows')->insert([
            'student_id' => "1",
            'book_id' => "1"
        ]);
        DB::table('borrows')->insert([
            'student_id' => "1",
            'book_id' => "2"
        ]);
        DB::table('borrows')->insert([
            'student_id' => "1",
            'book_id' => "3"
        ]);
        DB::table('borrows')->insert([
            'student_id' => "2",
            'book_id' => "4"
        ]);
                DB::table('borrows')->insert([
            'student_id' => "2",
            'book_id' => "8"
        ]);
    }
}
