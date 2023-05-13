<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFluxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flux', function (Blueprint $table) {
            $table->id();
            $table->string('source');
            /*table adresse source */ // 1flux ==> 1 ou plusieurs adresse source
            $table->foreignId('adresses_sources_id');
            $table->string('destination');
            /*table adresse destination*/ // 1flux ==> 1 ou plusieurs adresse destination
            $table->foreignId('adresses_destinations_id');
            $table->integer('port');
            $table->string('type_flux'); // permanent temporaire
            $table->string('regle_flux');
            $table->boolean('change_flux');
            $table->string('categorie_flux');
            $table->string('tcp/udp');
            $table->foreignId('protocole_id');
            $table->string('action');
            $table->foreignId('durees_id');
            $table->string('description');
            $table->string('justification');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->dropForeign(["adresses_sources_id","adresses_destinations_id","protocole_id","durees_id"]);
        });
        Schema::dropIfExists('flux');
    }
}
