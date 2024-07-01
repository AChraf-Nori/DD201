<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                "title" => 'MathLab',
                "student_id" => 1
            ],
            [
                "title" => 'Physics 2',
                "student_id" => 1
            ],
            [
                "title" => 'English Guide',
                "student_id" => 1
            ],
            [
                "title" => 'MathLab',
                "student_id" => 2
            ],
            [
                "title" => 'English Quiz',
                "student_id" => 3
            ],
        ]);
    }
}
