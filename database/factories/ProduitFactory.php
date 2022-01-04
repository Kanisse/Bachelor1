<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nom_Produit' => $this->faker->word(),
            'Prix_Produit' => $this->faker->numberBetween(1000,10000),
            'categorie_id' => $this->faker->randomDigitNotNull(1,2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
