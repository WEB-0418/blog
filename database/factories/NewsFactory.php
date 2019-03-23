<?php

use Faker\Generator as Faker;

$factory->define(App\Models\News::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'content' => $faker->text($maxNbChars = 400),
        'img' => $faker->imageUrl,
        'slug' => $faker->slug,
        'author_id' => $faker->numberBetween(1, 10),
        'views' => $faker->numberBetween(1, 1000000)
    ];
});
