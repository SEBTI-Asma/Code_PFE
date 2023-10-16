<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('demande_id'); // la demande traitée
            $table->integer('equipeUser'); // 1 ==> analyseur,2 ==> valideur,3==> codeur
            $table->foreignId('userTrai_id'); // user qui traite actuellemnt la demande
            $table->dateTime('dateArrivee');
            $table->boolean('Approval'); // si demande approuvée on passe au prochain acteur
            $table->dateTime('approvalDate');
            $table->integer('equipeUserNext'); // 1 ==> analyseur,2 ==> valideur,3==> codeur
            $table->string('motif');
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
        Schema::dropIfExists('actions');
    }
}
