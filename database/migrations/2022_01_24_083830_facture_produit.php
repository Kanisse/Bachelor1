<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FactureProduit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_produit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facture_id');
            $table->foreign('facture_id')
            ->references('id')
            ->on('factures')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')
            ->references('id')
            ->on('produits')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facture_produit');

    }
}
