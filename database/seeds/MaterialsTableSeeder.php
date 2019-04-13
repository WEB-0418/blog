<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Models\Material::create([
        	'name' => 'шерсть',
        	'slug' => 'sherst'
        ]);
        App\Models\Material::create([
        	'name' => 'хлопок',
        	'slug' => 'hlopok'
        ]);
        App\Models\Material::create([
        	'name' => 'бамбук',
        	'slug' => 'bambuk'
        ]);
        App\Models\Material::create([
        	'name' => 'ситец',
        	'slug' => 'sitets'
        ]);
        App\Models\Material::create([
        	'name' => 'бязь',
        	'slug' => 'byaz'
        ]);
        App\Models\Material::create([
        	'name' => 'из говна и палок',
        	'slug' => 'iz-govna-i-palok'
        ]);
        App\Models\Material::create([
        	'name' => 'полиэстер',
        	'slug' => 'poliester'
        ]);
        App\Models\Material::create([
        	'name' => 'акрил',
        	'slug' => 'akril'
        ]);
        App\Models\Material::create([
        	'name' => 'капрон',
        	'slug' => 'kapron'
        ]);
        App\Models\Material::create([
        	'name' => 'кевлар',
        	'slug' => 'kevlar'
        ]);
    }
}
