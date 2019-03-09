<?php

use Illuminate\Database\Seeder;
use App\Models\NewsCategory;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// $categories = [];

    	// for ($i = 0; $i < 10; $i++) {
    	// 	$categories[] = [
    	// 		'name' => 'Category ' . $i,
    	// 		'slug' => 'category' . $i
    	// 	];
    	// }


     //    DB::table('news_categories')->insert($categories);

    	factory(NewsCategory::class, 20)->create();
    }
}
