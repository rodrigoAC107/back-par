<?php

namespace Database\Factories;

use App\Models\Date;
use Illuminate\Database\Eloquent\Factories\Factory;

class DateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Date::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_date_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'date' => $this->faker->dateTimeThisYear($max = 'now', $timezone = null),
        ];
    }
}
