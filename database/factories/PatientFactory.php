<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $breeds = ['Labrador Retriever', 'German Shepherd', 'Golden Retriever', 'Bulldog', 'Poodle'];
        return [
            'petname' => $this->faker->name(),
            'status' => $this->faker->boolean(),
            'pawrent' => $this->faker->name(),
            'breed' => $this->faker->randomElement($breeds),
            'gender' => $this->faker->randomElement(['male','female']),
            'date_of_birth' => $this->faker->date(),
            'contact' => $this->faker->phoneNumber(),
            'address' => $this->faker->address()
        ];
    }
}

