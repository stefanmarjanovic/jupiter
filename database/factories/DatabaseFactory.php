<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Database>
 */
class DatabaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'hostname' => fake()->ipv4(),
            'port' => fake()->numberBetween(1, 3306),
            'ssh_flag' => fake()->boolean(), 
        ];
    }
}
