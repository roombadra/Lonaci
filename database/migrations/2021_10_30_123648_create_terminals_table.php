<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminalsTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terminals', function (Blueprint $table) {
            $table->id();
             $table->string('code_guichet');
            $table->string('marque');
            $table->string('model');
            $table->string('status');
            $table->foreignId('id_concessionnaire')->constrained('concessionnaires')->cascadeOnDelete();
            $table->foreignId('id_agence')->constrained('agences')->cascadeOnDelete();
            $table->foreignId('id_produit')->constrained('produits')->cascadeOnDelete();
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
        Schema::dropIfExists('terminals');
    }
}
