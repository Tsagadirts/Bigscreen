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
        Schema::create('answers', function (Blueprint $table) {
            // les colonnes permettant de definir les différent type de données
            ///////////création de la table answeres 
            //clé primaire:
            $table->id();
            //clé étrangére vient de la table questions
            $table->unsignedBigInteger('question_id')->index();
            //clé étrangére de la table surveyeds
            $table->unsignedBigInteger('surveyed_id');
            //création d'une colonne pour la réponse de l'utilisateurs 
            $table->string('answer');
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
        Schema::dropIfExists('answers');
    }
};
