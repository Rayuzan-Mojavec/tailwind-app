<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Language;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        $faker2 = Language::create('ja_JP');

        return [
            'ssn' => fake()->ssn,
            'namae' => $faker2->name,
            'address' => $faker2->address,
            'birth_date' => fake()->unique()->dateTimeBetween($startDate = '-19 years', $endDate = '-17 years', $timezone = null, $time = null),
        ];

    }
}
