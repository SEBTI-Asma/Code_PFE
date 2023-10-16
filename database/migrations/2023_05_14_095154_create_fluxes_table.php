<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFluxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fluxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('demande_id');
            $table->string('source');
            /*table adresse source */ // 1flux ==> 1 ou plusieurs adresse source
            // $table->foreignId('adresse_source_id');
            $table->string('destination');
            /*table adresse destination*/ // 1flux ==> 1 ou plusieurs adresse destination
            // $table->foreignId('adresse_destination_id');
            $table->string('port');
            $table->string('type_flux'); // permanent temporaire
            $table->string('regle_flux');
            $table->boolean('change_flux');
            $table->string('categorie_flux');
            $table->integer('tcp_udp');
            $table->foreignId('protocole_id');
            $table->foreignId('departement_id');
            $table->foreignId('sousdepartement_id');
            $table->integer('action');
            $table->foreignId('duree_id');
            $table->string('description');
            // $table->string('chemin_description');
            $table->string('justification');
            // $table->string('chemin_justification');
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
        Schema::create('fluxes', function (Blueprint $table) {
            $table->dropForeign(["adresse_source_id","adresse_destination_id","protocole_id","duree_id"]);
        });
        Schema::dropIfExists('fluxes');
    }
}
