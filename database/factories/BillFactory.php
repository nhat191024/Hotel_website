<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_id' => $this->faker->numberBetween(1, 10),
            'guest_number' => $this->faker->numberBetween(1, 20),
            'full_name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'payment_method' => $this->faker->numberBetween(0, 1),
            'total' => $this->faker->numberBetween(100, 1000),
            'status' => $this->faker->numberBetween(0, 1),
            'check_in' => $this->faker->dateTime,
        ];
    }
}
