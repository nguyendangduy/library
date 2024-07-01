<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = str_replace(".","",fake()->text(10));

        return [
            'name' => $name,
            'keyword' => strtoupper(str_replace(" ", "_", $name)),
        ];
    }
}
