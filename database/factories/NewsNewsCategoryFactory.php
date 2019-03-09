<?php

use Faker\Generator as Faker;

$factory->define(App\Models\NewsNewsCategory::class, function (Faker $faker) {
    return [
        'news_id' => $faker->unique()->numberBetween($min = 1, $max = 20),
        'category_id' => $faker->numberBetween($min = 1, $max = 20)
    ];
});
