<?php

use Illuminate\Database\Seeder;

class ProducersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    App\Models\Producer::create([
        	'name' => 'Украина',
        	'slug' => 'ukraina'
        ]);
        App\Models\Producer::create([
        	'name' => 'Франция',
        	'slug' => 'francia'
        ]);
        App\Models\Producer::create([
        	'name' => 'Буркина-Фасо',
        	'slug' => 'burkina-faso'
        ]);
        App\Models\Producer::create([
        	'name' => 'Кот-д-Ивуар',
        	'slug' => 'kot-d-ivuar'
        ]);
        App\Models\Producer::create([
        	'name' => 'Италия',
        	'slug' => 'italia'
        ]);
        App\Models\Producer::create([
        	'name' => 'Китай',
        	'slug' => 'kitay'
        ]);
        App\Models\Producer::create([
        	'name' => 'Вьетнам',
        	'slug' => 'vietman'
        ]);
        App\Models\Producer::create([
        	'name' => 'Молдова',
        	'slug' => 'moldova'
        ]);
        App\Models\Producer::create([
        	'name' => 'Россия',
        	'slug' => 'rossiya'
        ]);
        App\Models\Producer::create([
        	'name' => 'Австрия',
        	'slug' => 'avstriya'
        ]);
    }
}
