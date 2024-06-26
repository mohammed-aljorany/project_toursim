<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city_name'=>$this->faker->name(),
            'info'=>$this->faker->name(),
            'photo'=>$this->faker->title(),
            'country_id'=>$this->faker->numberBetween('1','10'),
        ];
    }
}
