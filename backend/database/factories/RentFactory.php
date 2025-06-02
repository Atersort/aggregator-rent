<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Rent;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rent>
 */
class RentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */

    protected $model = Rent::class;

    public function definition(): array
    {
        return [
            'title' => fake('ru_RU')->title(),
            'description' => fake('ru_RU')->text(200),
            'address' => fake('ru_RU')->address(),
            'price' => round(fake('ru_RU')->numberBetween(10_000, 50_000), -2),
        ];
    }
}
