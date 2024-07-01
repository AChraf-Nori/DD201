<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            [
                "classe" => 'DD101',
                "year" => 1,
                "student_id" => 1
            ], 
            [
                "classe" => 'DD201',
                "year" => 2,
                "student_id" => 2
            ],
            [
                "classe" => 'ENGS302',
                "year" => 3,
                "student_id" => 3
            ]
            ]);
    }
}
