<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'articule'=> $faker->regexify('[0-9]{3}-[A-Z][0-9]{4}'), 
        'name' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'price' => $faker->numberBetween(100, 1000)/100,
        'is_present' => $faker->boolean($chanceOfGettingTrue = 80),
        'size' => $faker->randomElement($array = ['XS','S','M','L','XL','XXL']),
		'color_id' => $faker->numberBetween(1, App\Models\Color::count()),         
		'brand_id' => $faker->numberBetween(1, App\Models\Brand::count()),         
		'season_id' => $faker->numberBetween(1, App\Models\Season::count()),         
		'material_id' => $faker->numberBetween(1, App\Models\Material::count()),         
		'producer_id' => $faker->numberBetween(1, App\Models\Producer::count()),         
		'category_id' => $faker->numberBetween(1, App\Models\ProductCategory::count()),
		'description' => $faker->text($maxNbChars = 500),  
  	    'in_promotion' => $faker->boolean($chanceOfGettingTrue = 20),
		'is_hit' => $faker->boolean($chanceOfGettingTrue = 20),
		'thumb' => $faker->imageUrl(200, 200),
		'image' => $faker->imageUrl(1920, 1080),
    ];
});

