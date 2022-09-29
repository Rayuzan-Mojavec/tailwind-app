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
        
        $faker3 = Language::create('id_ID');
        $faker2 = Language::create('ja_JP');

        $gender = $faker3->randomElement(['Cowok', 'Cewek']);
        $religion = $faker3->randomElement(["Islam", "Protestan", "Katolik", "Buddha", "Hindu", "Konghucu"]);


        return [
            'ssn' => $faker3->nik,
            'namae' => $faker3->name,
            'gender' => $gender,
            'rerijyon' => $religion,
            'address' => $faker3->address,
            'birth_date' => fake()->unique()->dateTimeBetween($startDate = '-19 years', $endDate = '-17 years', $timezone = null, $time = null),
        ];

    }
}
