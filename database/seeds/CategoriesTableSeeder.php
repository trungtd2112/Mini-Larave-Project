<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories_data = [
            [
                "cat_name" => "Iphone"
            ],
            [
                "cat_name" => "HTC"
            ],
            [
                "cat_name" => "Samsung"
            ],
            [
                "cat_name" => "Bphone"
            ],
            [
                "cat_name" => "Nokia"
            ],
            [
                "cat_name" => "Vsmart"
            ],
        ];

        DB::table('categories')->insert($categories_data);
    }
}
