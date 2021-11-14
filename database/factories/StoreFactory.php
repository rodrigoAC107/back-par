<?php

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Store::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_store_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'location_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'name' => $this->faker->word(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->e164PhoneNumber(),
            'latitude' => $this->faker->latitude($min = -90, $max = 90),
            'longitude' => $this->faker->longitude($min = -180, $max = 180),
        ];
    }
}
