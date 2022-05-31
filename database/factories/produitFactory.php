<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class produitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nomProduit = $this->faker->unique()->word();
        $prixUnitaire = $this->faker->randomFloat();

        return [
            'nomProduit' => $nomProduit,
            'prixUnitaire' => $prixUnitaire,
        ];
    }
}
