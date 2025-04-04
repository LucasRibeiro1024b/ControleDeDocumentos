<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\People;
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
            "responsavel" => People::pluck('id')->random(),
            "versao" => fake()->numerify("v#.#"),
            "npaginas" => fake()->randomNumber(3),
        ];
    }
}
