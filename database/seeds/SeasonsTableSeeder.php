<?php

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Season::create([
        	'name' => 'весна',
        	'slug' => 'vesna'
        ]);
        App\Models\Season::create([
        	'name' => 'зима',
        	'slug' => 'zima'
        ]);
        App\Models\Season::create([
        	'name' => 'лето',
        	'slug' => 'leto'
        ]);
        App\Models\Season::create([
        	'name' => 'осень',
        	'slug' => 'osen'
        ]);
        App\Models\Season::create([
        	'name' => 'весна-осень',
        	'slug' => 'vesna-osen'
        ]);
        App\Models\Season::create([
        	'name' => 'всесезонный',
        	'slug' => 'vsesezonnyi'
        ]);
    }
}
