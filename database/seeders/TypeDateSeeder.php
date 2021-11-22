<?php

namespace Database\Seeders;

use App\Models\TypeDate;
use Illuminate\Database\Seeder;

class TypeDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeDate::factory()->count(1)->create(['name' => 'Acreditación']);
        TypeDate::factory()->count(1)->create(['name' => 'Vencimiento']);
        TypeDate::factory()->count(1)->create(['name' => 'Rendición']);
    }
}
