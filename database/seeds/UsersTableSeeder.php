<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_data = [
            [
                'email' => 'user1@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 1
            ],
            [
                'email' => 'user2@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 2
            ],
            [
                'email' => 'user3@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 1
            ],
            [
                'email' => 'user4@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 2
            ],
            [
                'email' => 'user5@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 2
            ],
        ];
        DB::table('users')->insert($users_data);
    }
}
