<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()->count(10)->create();

        $user = User::create(
            [
                'name' => 'Rodrigo',
                'lastname' => 'Acosta',
                'email' => 'rodrigoacosta@gmail.com',
                'password' => '41529284',
                'email_verified_at' => now()
            ]
        );
    }
}
