<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveyeds', function (Blueprint $table) {
            // les colonnes permettant de definir les différent type de données
            ///////////création de la table surveyeds 
            //clé primaire:
            $table->id();
            //création de la colonne user_email de l'utulisateur
            $table->string('user_email')->unique();
            //création de la colonne token de l'utulisateur
            $table->string('token');
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
        //supprimer la table surveyeds si elle existe avant
        Schema::dropIfExists('surveyeds');
    }
};



