<?php

namespace Database\Factories;

use App\Models\Statut;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class commandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $libCommande = $this->faker->word();
        $dateCreation = $this->faker->date();
        $user_id = User::inRandomOrder()->first()->id;
        $statut_id = Statut::inRandomOrder()->first()->id;

        return
        [
           'libCommande' => $libCommande,
           'dateCreation' => $dateCreation,
           'user_id' => $user_id,
           'statut_id' => $statut_id,
        ];
    }
}
