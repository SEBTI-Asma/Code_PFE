<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulaireChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulaires_changes', function (Blueprint $table) {
            $table->id();
            $table->string('type_demande');
            $table->string('nom_prenom');
            $table->string('telephone');
            $table->string('service');
            $table->dateTime('date_demande'); //date de la demande
            $table->dateTime('date_application');
            $table->string('raison_changement');
            $table->string('modifications_techniques');
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
        Schema::dropIfExists('formulaires_changes');
    }
}
