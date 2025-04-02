<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "identificacao" => fake()->unique()->numerify("DOC####"),
            "responsavel" => fake()->name(),
            "setores" => fake()->sentence(1),
            "versao" => "v1.0",
            "npaginas" => fake()->randomNumber(3),
        ];
    }
}
