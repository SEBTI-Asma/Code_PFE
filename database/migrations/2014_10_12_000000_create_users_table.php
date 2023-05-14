<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('personne_id');//1 user ==> 1 personne
            $table->string('nom');
            $table->string('prenom');
            $table->integer('telephone');
            $table->foreignId('departement_id');
            $table->foreignId('sous_departement_id');
            $table->integer('role')->default(0);
            $table->integer('droit')->default(0);
            $table->integer('active')->default(0);
            $table->string('photo');
            $table->rememberToken();
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
        Schema::create('users', function (Blueprint $table) {
            $table->dropForeign(["personne_id"]);
        });
        Schema::dropIfExists('users');
    }
}
