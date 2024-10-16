<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->string('nom_deposant');
            $table->string('prenom_deposant');
            $table->string('contact');
            $table->string('status');
            $table->string('observation');
            $table->foreignId('id_terminal')->constrained('terminals')->cascadeOnDelete();
            $table->foreignId('id_agence')->constrained('agences')->cascadeOnDelete();
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
        Schema::dropIfExists('maintenances');
    }
}
