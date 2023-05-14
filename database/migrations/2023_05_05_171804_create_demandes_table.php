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
            /*table Flux*/ // 1 demande ==> 1 ou plusieurs flux
            //$table->foreignId('acteurs_demandes_id');
            /*table Acteurs_demandes*/ // 1 demande ==> 1 acteurs
            // $table->foreignId('acteurs_demandes_id');
            /*table Acteurs_demandes*/ // 1 demande ==> 4 personnes
            $table->integer('status'); // validée, refusée ou en cours (analysée ou codée)
            $table->boolean('type'); // mes demandes ou demandes reçues
            $table->boolean('archivee');
            $table->boolean('suivi');
            $table->boolean('annulee');
            $table->foreignId('validee_par_id');
            $table->date('validee_at');
            $table->foreignId('analysee_par_id');
            $table->date('analysee_at');
            $table->foreignId('codee_par_id');
            $table->date('codee_at');
            $table->foreignId('demandeur_id');
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
            $table->dropForeign(["flux_id"]);
        });
        Schema::dropIfExists('demandes');
    }
}
