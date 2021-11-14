<?php

namespace Database\Factories;

use App\Models\TypeStore;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeStoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TypeStore::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
        ];
    }
}
