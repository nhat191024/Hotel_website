<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'sub_title' => $this->faker->sentence,
            'image' => '/img/banner/demo.png',
            'link' => $this->faker->url,
            'status' => $this->faker->numberBetween(0, 1),
        ];
    }
}
