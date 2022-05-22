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
        Schema::create('questions', function (Blueprint $table) {
            // les colonnes permettant de definir les différent type de données
            /////////////////création de la table question 
            //clé primaire:
            $table->id();
            //création d'une colonne pour le titre de la question:
            $table->string('title', 100);
            //création d'une colonne pour le corp de la question:
            $table->string('body');
            //création d'une colonne pour le type de la question
            $table->string('question_type');
            //création d'une colonne pour les different proposition des réponces
            $table->json('options');
            //la methode timestamp pour crée le deux colonnes created_at et updated_at
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
        Schema::dropIfExists('questions');
    }
};
