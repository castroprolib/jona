<?php

use Illuminate\Database\Seeder;

class CountrysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// DB::table('countrys')->insert([
    	// 	'country' => 'colombia'
    		
    	// ]);

    	// DB::table('countrys')->insert([
    	// 	'country' => 'mexico'
    		
    	// ]);

    	DB::table('countrys')->insert([
    		'country' => 'venezuela'
    		
    	]);        
        
    }
}
