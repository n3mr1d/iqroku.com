<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class registertpaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_father' => fake()->name(),
            'name_mother' => fake()->name(),
            'whatsapp' => fake()->phoneNumber(),
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['male', 'female']),
            'email' => fake()->email(),
            'datebirth' => fake()->dateTimeBetween('-100 years', '-18 years'),
            'tpalama' => fake()->boolean(),
            'leveltpa' => fake()->randomElement(['iqro_1', 'iqro_2']),
            'pendampingan' => fake()->boolean(),
            'saran' => fake()->sentence(),
            'status' => 'pending_payment',
            'admin_notes' => null,
            'approved_at' => null,
            'approved_by' => null,
        ];
    }
}
