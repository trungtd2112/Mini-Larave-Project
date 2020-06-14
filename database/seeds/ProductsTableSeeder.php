<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'prd_name' => 'iphone 1',
                'prd_price' => 100001,
                'prd_warranty' => 6,
                'prd_status' => '1',
                'prd_category' => 1,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 2',
                'prd_price' => 100001,
                'prd_warranty' => 6,
                'prd_status' => '0',
                'prd_category' => 2,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 3',
                'prd_price' => 100001,
                'prd_warranty' => 6,
                'prd_status' => '1',
                'prd_category' => 3,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 4',
                'prd_price' => 100001,
                'prd_warranty' => 6,
                'prd_status' => '0',
                'prd_category' => 4,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 5',
                'prd_price' => 1000001,
                'prd_warranty' => 6,
                'prd_status' => '1',
                'prd_category' => 5,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 6',
                'prd_price' => 100017,
                'prd_warranty' => 6,
                'prd_status' => '0',
                'prd_category' => 6,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 7',
                'prd_price' => 1002000,
                'prd_warranty' => 6,
                'prd_status' => '1',
                'prd_category' => 1,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 8',
                'prd_price' => 105000,
                'prd_warranty' => 6,
                'prd_status' => '0',
                'prd_category' => 2,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 9',
                'prd_price' => 105000,
                'prd_warranty' => 6,
                'prd_status' => '1',
                'prd_category' => 2,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 10',
                'prd_price' => 102300,
                'prd_warranty' => 6,
                'prd_status' => '0',
                'prd_category' => 3,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 11',
                'prd_price' => 1000000,
                'prd_warranty' => 6,
                'prd_status' => '1',
                'prd_category' => 4,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 12',
                'prd_price' => 100000,
                'prd_warranty' => 6,
                'prd_status' => '0',
                'prd_category' => 5,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 13',
                'prd_price' => 100000,
                'prd_warranty' => 6,
                'prd_status' => '1',
                'prd_category' => 6,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 14',
                'prd_price' => 1000000,
                'prd_warranty' => 6,
                'prd_status' => '0',
                'prd_category' => 1,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 15',
                'prd_price' => 100000,
                'prd_warranty' => 6,
                'prd_status' => '1',
                'prd_category' => 2,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 16',
                'prd_price' => 1000000,
                'prd_warranty' => 6,
                'prd_status' => '1',
                'prd_category' => 3,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 17',
                'prd_price' => 100100,
                'prd_warranty' => 6,
                'prd_status' => '1',
                'prd_category' => 4,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
            [
                'prd_name' => 'iphone 18',
                'prd_price' => 100123,
                'prd_warranty' => 6,
                'prd_status' => '1',
                'prd_category' => 5,
                'prd_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit optio similique fuga excepturi vitae, asperiores recusandae tempora reprehenderit accusantium, a obcaecati saepe pariatur et! Ipsam asperiores et quisquam eum obcaecati',
                'prd_featured' => 0,
            ],
        ];

        DB::table('products')->insert($data);
    }
}
