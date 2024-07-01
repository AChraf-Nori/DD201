<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentExamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exam_student')->insert([
            [
                "student_id" => 1,
                "exam_id" => 1
            ],
            [
                "student_id" => 1,
                "exam_id" => 2
            ],
            [
                "student_id" => 1,
                "exam_id" => 4
            ],
            [
                "student_id" => 2,
                "exam_id" => 3
            ],
        ]);
    }
}
