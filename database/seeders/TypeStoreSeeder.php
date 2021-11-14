<?php

namespace Database\Seeders;

use App\Models\TypeStore;
use Illuminate\Database\Seeder;

class TypeStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeStore::factory()->count(10)->create();
    }
}
