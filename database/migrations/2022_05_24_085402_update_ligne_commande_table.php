<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ligne_commandes', function(Blueprint $table) {
            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')->references('id')->on('produits')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('quantite');
            $table->unsignedBigInteger('commande_id');
            $table->foreign('commande_id')->references('id')->on('commandes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_ligne_commandes', function(Blueprint $table) {

            $table->dropForeign('ligne_commande_produit_id_foreign');
            $table->dropForeign('ligne_commande_commande_id_foreign');
            $table->dropColumn('quantite');
            $table->dropColumn('produit_id');
            $table->dropColumn('commande_id');
        });
    }
};
