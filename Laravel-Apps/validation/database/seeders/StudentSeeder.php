<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                "username" => "mark lee",
                "email" => "marklee@gmail.com",
                "birthday" => "2002-03-12",
                "gender" => "male",
                "classe" => "DD101",
                "is_married" => true
            ]
        ]);
    }
}
