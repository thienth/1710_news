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
        	[
        		'name' => 'admin',
        		'email' => 'admin@gmail.com',
        		'password' => Hash::make('123456'),
                'active' => 1
        	],
        	[
        		'name' => 'member',
        		'email' => 'member@gmail.com',
        		'password' => Hash::make('secret'),
                'active' => 1
        	]
        ];

        DB::table('users')->insert($users);
    }
}
