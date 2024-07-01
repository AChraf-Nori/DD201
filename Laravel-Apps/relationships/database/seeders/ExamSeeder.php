<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exams')->insert([
            [
                "exam" => 'Cloud Native No.1'
            ],
            [
                "exam" => 'Algorithm No.1'
            ],
            [
                "exam" => 'Cloud Native No.2'
            ],
            [
                "exam" => 'Soft Skills No.1'
            ],
        ]);
    }
}
