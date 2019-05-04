<?php

use Faker\Generator as Faker;
use App\Models\Product;
use App\Models\Image;

$factory->define(Image::class, function (Faker $faker) {

	$isThumb = $faker->boolean;

	$sizes = [
		'width' => 1920,
		'height' => 1080,
	];

	if ($isThumb) {
		$sizes['width'] = 500;
		$sizes['height'] = 500;
	}

    return [
        'isThumb' => $isThumb,
        'path' => $faker->imageUrl($sizes['width'], $sizes['height']),
        'product_id' => Product::all()->random(1)->first()->id,
    ];
});
