<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       App\Models\ProductCategory::create([
        	'name' => 'носки',
          'slug' => 'noski'
        	
        ]);
       App\Models\ProductCategory::create([
        	'name' => 'гольфы',
          'slug' => 'golfy'
        	
        ]);
       App\Models\ProductCategory::create([
        	'name' => 'леггинсы',
          'slug' => 'legginsy'
        	
        ]);
       App\Models\ProductCategory::create([
        	'name' => 'колготки',
          'slug' => 'kolgotki'
        	
        ]);
       App\Models\ProductCategory::create([
        	'name' => 'чулки',
          'slug' => 'chulki'
        	
        ]);
       App\Models\ProductCategory::create([
        	'name' => 'трусы с начёсом',
          'slug' => 'trusy-s-nachesom'
        	
        ]);
       App\Models\ProductCategory::create([
        	'name' => 'комбинации',
          'slug' => 'combinatsii'
        	
        ]);
       App\Models\ProductCategory::create([
        	'name' => 'лифчики',
          'slug' => 'liffchiki'
        	
        ]);
       App\Models\ProductCategory::create([
        	'name' => 'пояса верности',
          'slug' => 'poyasa-vernosti'
        	
        ]);
       App\Models\ProductCategory::create([
        	'name' => 'шапки',
          'slug' => 'shapki'
        ]);
    }
}
