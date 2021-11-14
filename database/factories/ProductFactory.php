<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_product_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'name' => $this->faker->firstName(),
            'special' => $this->faker->boolean(),
        ];
    }
}
