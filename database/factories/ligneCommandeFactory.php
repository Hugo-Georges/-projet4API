<?php

namespace Database\Factories;

use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ligneCommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $produit_id = Produit::inRandomOrder()->first()->id;
        $quantite = $this->faker->randomDigitNotNull();
        $commande_id = Commande::inRandomOrder()->first()->id;

        return [
            'produit_id' => $produit_id,
            'quantite' => $quantite,
            'commande_id' => $commande_id,
        ];
    }
}
