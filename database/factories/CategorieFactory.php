<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nom_Cat' => $this->faker->word(),
            'slug' => Str::slug($this->faker->word()),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
