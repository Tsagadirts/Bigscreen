<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    // étendue lorsque qu'on souhaite rendre la propriété/méthode visible dans 
    // toutes les classes qui étendent la classe actuelle, y compris la classe parente.
    protected $guarded = ['id']; 
    // casts est un accessoire permettant de récupérer des valeurs de la base de données
    // exemple convertire un JSON string stocké dans la base de données en tableau
    protected $casts = [
        'options' => 'array'
    ];

public function answers(){
    // relation hasMany indique que chaque question à plusieur choix en terme de réponses
    return $this->hasMany(Answer::class);
}   

}
