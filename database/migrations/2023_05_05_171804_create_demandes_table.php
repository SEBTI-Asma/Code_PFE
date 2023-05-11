<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flux_id');
            /*table Flux*/ // 1 demande ==> 1 ou plusieurs flux
            //$table->foreignId('acteurs_demandes_id');
            /*table Acteurs_demandes*/ // 1 demande ==> 1 acteurs
            $table->foreignId('personnes_id');
            /*table Acteurs_demandes*/ // 1 demande ==> 4 personnes
            $table->integer('status');
            $table->integer('type');
            $table->integer('archivee');
            $table->integer('suivi');
            $table->integer('annulee');
            $table->dateTime('dateDemande');
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
            $table->dropForeign(["flux_id","personnes_id"]);
        });
        Schema::dropIfExists('demandes');
    }
}
