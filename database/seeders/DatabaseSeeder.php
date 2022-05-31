<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\statuts;
use App\Models\Commande;
use App\Models\LigneCommande;
use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuts')->insert([
            [
                'id' => 1,
                'libstatuts' => 'en attente',
            ],

            [
                'id' => 2,
                'libstatuts' => 'en cours',
            ],

            [
                'id' => 3,
                'libstatuts' => 'terminé',
            ],

            [
                'id' => 4,
                'libstatuts' => 'abandonnée',
            ],

            [
                'id' => 5,
                'libstatuts' => 'paiement incomplet',
            ],
        ]);

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),

            ],

            [
                'id' => 2,
                'name' => 'admin',
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('gfqsdfjgjk'),

            ],
            [
                'id' => 3,
                'name' => 'Hugo-Georges',
                'email' => 'lafuente.hg@gmail.com',
                'password' => Hash::make('motDeP@sseC00l'),

            ],
        ]);


        Produit::factory()
        ->count(50)
        ->create();

        ligneCommande::factory()
        ->has(Commande::factory()->count(10))
        ->count(15)
        ->create();





    }
}
 // \App\Models\User::factory(10)->create();
