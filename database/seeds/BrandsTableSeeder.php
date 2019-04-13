<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	App\Models\Brand::create([
        	'name' => 'Divi',
        	'slug' => 'divi'
        ]);
        App\Models\Brand::create([
        	'name' => 'Mercedes',
        	'slug' => 'mercedes'
        ]);
        App\Models\Brand::create([
        	'name' => 'Calvin Clein',
        	'slug' => 'calvin-clein'
        ]);
        App\Models\Brand::create([
        	'name' => 'Marlboro',
        	'slug' => 'marlboro'
        ]);
        App\Models\Brand::create([
        	'name' => 'Gucci',
        	'slug' => 'gucci'
        ]);
        App\Models\Brand::create([
        	'name' => 'Житомирские носки',
        	'slug' => 'zhitomirskie-noski'
        ]);
        App\Models\Brand::create([
        	'name' => 'Мухосранское белье',
        	'slug' => 'muhosranskoe-belie'
        ]);
        App\Models\Brand::create([
        	'name' => 'Lee Cooper',
        	'slug' => 'lee-cooper'
        ]);
        App\Models\Brand::create([
        	'name' => 'Adidas',
        	'slug' => 'adidas'
        ]);
        App\Models\Brand::create([
        	'name' => 'Durex',
        	'slug' => 'durex'
        ]);
    }
}
