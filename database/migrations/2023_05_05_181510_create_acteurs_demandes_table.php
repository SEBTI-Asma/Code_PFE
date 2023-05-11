<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActeursDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acteurs_demandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('valideur_Id'); //Id user //1 acteurs ==> 1 valideur
            $table->foreignId('analyseur_Id'); //Id user //1 acteurs ==> 1 analyseur
            $table->foreignId('codeur_Id');   //Id user //1 acteurs ==> 1 codeur
            $table->foreignId('demandeur_Id'); //Id user //1 acteurs ==> 1 demandeur
            // $table->timestamps();
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
            $table->dropForeign(["valideur_Id","analyseur_Id","codeur_Id","demandeur_Id"]);
        });
        Schema::dropIfExists('acteurs_demandes');
    }
}
