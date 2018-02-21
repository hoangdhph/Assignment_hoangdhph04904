<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	['name' => 'admin', 'email' => 'hoang4ever@gmail.com', 'password' => Hash::make('123123')],
        	['name' => 'hoangdh', 'email' => 'hoangdhph04904@fpt.edu.vn', 'password' => Hash::make('123456')]
        ];

        DB::table('users')->insert($users);
    }
}
