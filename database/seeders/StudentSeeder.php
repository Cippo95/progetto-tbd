<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Str;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Student::factory()
		// 	->count(2)
		// 	->create();
        DB::table('students')->insert([
            'name' => "Bruno",
            'surname' => "Lori"
        ]);
        DB::table('students')->insert([
            'name' => "Cesio",
            'surname' => "Rossi"
        ]);
        DB::table('students')->insert([
            'name' => "Igino",
            'surname' => "Genovesi"
        ]);
    }
}
