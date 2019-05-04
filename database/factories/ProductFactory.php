<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {

	$names = [
		'Товар 1',
		'Товар 2',
		'Товар 3',
		'Товар 4',
		'Товар 5',
		'Товар 6',
		'Товар 7',
		'Товар 8',
		'Товар 9',
		'Товар 10',
		'Товар 11',
		'Товар 12',
		'Товар 13',
		'Товар 14',
		'Товар 15',
		'Товар 16',
		'Товар 17',
		'Товар 18',
		'Товар 19',
		'Товар 20',
		'Товар 21',
		'Товар 22',
		'Товар 23',
		'Товар 24',
		'Товар 25',
	];


    return [
        'articule'=> $faker->regexify('[0-9]{3}-[A-Z][0-9]{4}'), 
        // 'name' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'name' => $faker->randomElement($names),
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

