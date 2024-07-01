<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                "nom" => "category 1",
                "description" => "this is description 1"
            ],
            [
                "nom" => "category 2",
                "description" => "this is description 2"
            ],
            [
                "nom" => "category 3",
                "description" => "this is description 3"
            ]
            ]);
    }
}
