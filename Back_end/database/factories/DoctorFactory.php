<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'name'=> fake()->name(),
            // 'email'=>fake()->email(),
            // 'password'=>Hash::make('password'),
            // 'gender'=>fake()->randomElement(['male','female']),
            // 'phone'=>fake(),
            // 'date_of_birth',
            // 'speciality',
            // 'address',
            // 'statut',
        ];
    }
}
