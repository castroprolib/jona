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
    	// php artisan db:seed

    	// php artisan db:seed --class=UsersTableSeeder


    	// DB::table('users')->insert([
    	// 	'name' => 'jonathan',
    	// 	'email' => 'admin@hotmail.com',
    	// 	'password' => bcrypt('123'),
    	// 	'role_id' => 1,
    	// 	'country_id' => 1
    	// ]);

    	DB::table('users')->insert([
    		'name' => 'maria',
    		'email' => 'maria@hotmail.com',
    		'password' => bcrypt('123'),
    		'role_id' => 2,
    		'country_id' => 2
    	]);
    }
}
