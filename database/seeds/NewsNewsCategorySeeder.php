<?php

use Illuminate\Database\Seeder;
use App\Models\NewsNewsCategory;

class NewsNewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(NewsNewsCategory::class, 20)->create();
    }
}
