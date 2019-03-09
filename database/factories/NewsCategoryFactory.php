<?php

use Faker\Generator as Faker;

$factory->define(App\Models\NewsCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'slug' => $faker->slug,
    ];
});
