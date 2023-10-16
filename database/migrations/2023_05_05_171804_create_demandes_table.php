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
            $table->foreignId('user_id');
            /*table Flux*/ // 1 demande ==> 1 ou plusieurs flux
            //$table->foreignId('acteurs_demandes_id');
            /*table Acteurs_demandes*/ // 1 demande ==> 1 acteurs
            // $table->foreignId('acteurs_demandes_id');
            /*table Acteurs_demandes*/ // 1 demande ==> 4 personnes
            $table->integer('status'); // validée (0), refusée (1) ou en cours (2) (analysée ou codée)
            $table->boolean('archivee');
            $table->string('objet_demande');
            $table->boolean('suivi');
            $table->boolean('annulee');
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
            $table->dropForeign(["validee_par_id","analysee_par_id","codee_par_id","demandeur_id"]);
        });
        Schema::dropIfExists('demandes');
    }
}
