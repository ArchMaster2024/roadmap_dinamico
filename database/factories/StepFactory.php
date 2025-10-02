<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Step>
 */
class StepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'steps' => $this->fake()->numberBetween(1, 10),
            'order' => $this->fake()->numberBetween(1, 10),
            'roadmap_id' => $this->fake()->numberBetween(1, 10),
        ];
    }
}
