<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'res_name'=>$this->faker->company(),
            'city'=>$this->faker->city(),
            'res_address'=>$this->faker->streetAddress()
        ];
    }
}
