<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'transaction_id' => $this->faker->numberBetween(1, 50),
            'service_id' => $this->faker->numberBetween(1, 10),
            'campsite_id' => $this->faker->numberBetween(1, 10),
            'start_date' => $this->faker->dateTimeThisYear,
            'end_date' => $this->faker->dateTimeThisYear,
            'price' => $this->faker->numberBetween(100, 1000)
        ];
    }
}
