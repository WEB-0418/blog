<?php

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\NewsCategory;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(News::class, 2000)->create()->each(function($news) {
        	$randomCount = rand(1, NewsCategory::count());
        	$randomCategories = NewsCategory::all()->random($randomCount);
        	$ids = $randomCategories->pluck('id')->all();
        	$news->categories()->attach($ids);
        });
    }
}
