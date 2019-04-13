<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'user_avatar' => $faker->imageUrl,
        'user_name' => $faker->name,
        'user_location' => $faker->city,
        'text' => $faker->text($maxNbChars = 500),
        'product_id' => $faker->numberBetween(1, App\Models\Product::count())
    ];
});
