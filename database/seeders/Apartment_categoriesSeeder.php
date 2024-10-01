<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Apartment_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("apartment_categories")->insert(
            [['name'=>'Rent'],
            ['name'=>'Sell'],
            ['name'=>'Commercial'],
            ['name'=>'D'],
            ['name'=>'E']]
        );
    }
}
