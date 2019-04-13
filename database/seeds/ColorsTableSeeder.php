<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    App\Models\Color::create([
        	'name' => 'синий',
        	'slug' => 'siniy',
        	'hex' => '#3490dc'
        ]);
        App\Models\Color::create([
        	'name' => 'индиго',
        	'slug' => 'indigo',
        	'hex' => '#6574cd'
        ]);
        App\Models\Color::create([
        	'name' => 'фиолетовый',
        	'slug' => 'fioletovyi',
        	'hex' => '#9561e2'
        ]);
        App\Models\Color::create([
        	'name' => 'розовый',
        	'slug' => 'rozovyi',
        	'hex' => '#f66D9b'
        ]);
        App\Models\Color::create([
        	'name' => 'красный',
        	'slug' => 'krasnyi',
        	'hex' => '#e3342f'
        ]);
        App\Models\Color::create([
        	'name' => 'оранжевый',
        	'slug' => 'oranzhevyi',
        	'hex' => '#f6993f'
        ]);
        App\Models\Color::create([
        	'name' => 'желтый',
        	'slug' => 'zheltyi',
        	'hex' => '#ffed4a'
        ]);
        App\Models\Color::create([
        	'name' => 'зеленый',
        	'slug' => 'zelenyi',
        	'hex' => '#38c172'
        ]);
        App\Models\Color::create([
        	'name' => 'бирюзовый',
        	'slug' => 'biruzovyi',
        	'hex' => '#4dc0b5'
        ]);
        App\Models\Color::create([
        	'name' => 'голубой',
        	'slug' => 'goluboy',
        	'hex' => '#6cb2eb'
        ]);
    }
}
