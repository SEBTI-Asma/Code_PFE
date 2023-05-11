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
            $table->string('port');
            $table->string('type_flux');
            $table->string('regle_demande');
            $table->boolean('change_demande');
            $table->string('categorie_change');
            $table->string('tcp/udp');
            $table->string('protocole');
            $table->string('action');
            $table->string('duree');
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
            $table->dropForeign(["adresses_sources_id","adresses_destinations_id"]);
        });
        Schema::dropIfExists('flux');
    }
}
