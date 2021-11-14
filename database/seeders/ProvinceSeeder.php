<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::factory()->count(1)->create(['name' => 'Catamarca']);
        Province::factory()->count(1)->create(['name' => 'La Rioja']);
        Province::factory()->count(1)->create(['name' => 'Cordoba']);
    }
}
