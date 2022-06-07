<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            "academic_year"=>"2021/2022",
            "item"=>$this->faker->randomElement,
            "boys_quantity"=>$this->faker->randomDigit(),
            "girls_quantity"=>$this->faker->randomDigit(),
        ];
    }
}
