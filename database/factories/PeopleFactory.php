<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            "nome" => collect(range(1, rand(2, 4)))
            ->map(fn () => fake()->lastName())
            ->prepend(fake()->firstName())
            ->join(' '),
        ];
    }
}
