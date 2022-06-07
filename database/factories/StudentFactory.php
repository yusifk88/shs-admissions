<?php

namespace Database\Factories;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
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
            "index_number"=>Str::random(10),
            "name"=>$this->faker->name(),
            "gender"=>"male",
            "aggregate"=>$this->faker->randomDigit(),
            "programme"=>"business",
            "track"=>"single",
            "status"=>"boarding",
            "photo_url"=>$this->faker->imageUrl,
            "uuid"=>Str::uuid()
        ];


    }
}
