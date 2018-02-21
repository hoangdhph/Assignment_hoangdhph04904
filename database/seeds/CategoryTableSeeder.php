<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates = [
        	['name' => 'Dresses', 'slug' => 'dresses'],
        	['name' => 'Glasses', 'slug' => 'glasses'],
        	['name' => 'Sweaters', 'slug' => 'sweaters'],
        	['name' => 'Skirts', 'slug' => 'skirts'],
        	['name' => 'T-Shirts', 'slug' => 't-shirts'],
        	['name' => 'T-Watchers', 'slug' => 't-watchers'] 	
        ];

        DB::table('categories')->insert($cates);
    }
}
