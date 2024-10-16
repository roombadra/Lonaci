<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLignePannesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_pannes', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('gravite');
            $table->string('status');
            $table->foreignId('id_terminal')->constrained('terminals')->cascadeOnDelete();
            $table->foreignId('id_panne')->constrained('pannes')->cascadeOnDelete();
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
        Schema::dropIfExists('ligne_pannes');
    }
}
