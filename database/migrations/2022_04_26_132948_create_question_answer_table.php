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
        Schema::create('question_answer', function (Blueprint $table) {
            $table->unsignedBigInteger('question_id'); // le type doit correspondre au type de la clé primaire de la table question
            $table->unsignedBigInteger('answer_id');
            // On met une cascade si on supprime une question on supprime les reponces dans la table de liaison 
            // En effet ces informations sont inutiles ils ne servent qu'à relier les deux tables si une question disparaît de 
            // la base de données la reponce  dans la table de liaison n'a plus de sens.
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('answer_id')->references('id')->on('answers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_answer');
    }
};
