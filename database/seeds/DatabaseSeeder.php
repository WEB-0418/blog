<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	AuthorSeeder::class,
        	NewsCategorySeeder::class,
			NewsTableSeeder::class,
            BrandsTableSeeder::class,
            ColorsTableSeeder::class,
            MaterialsTableSeeder::class,
            ProducersTableSeeder::class,
            SeasonsTableSeeder::class,
            ProductCategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            CommentsTableSeeder::class,
        ]);
    }
}
