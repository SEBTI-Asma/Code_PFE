<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdresseDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresse_destinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fluxe_id');
            $table->string('adresse');
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
        Schema::create('adresse_destinations', function (Blueprint $table) {
            $table->dropForeign(["fluxe_id"]);
        });
        Schema::dropIfExists('adresse_destinations');
    }
}
