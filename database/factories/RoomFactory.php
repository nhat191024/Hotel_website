<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'category_id' => $this->faker->numberBetween(1, 7),
            'price' => $this->faker->numberBetween(100, 1000),
            'size' => $this->faker->numberBetween(10, 100),
            'capacity' => $this->faker->numberBetween(1, 20),
            'bed' => $this->faker->numberBetween(1, 8),
            'description' => $this->faker->paragraph,
            'is_booked' => $this->faker->numberBetween(0, 1),
        ];
    }
}
