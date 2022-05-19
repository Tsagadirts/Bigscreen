<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surveyed extends Model
{
    public function answers(){
    // relation hasMany indique que chaque question à plusieur choix en terme de réponses
        return $this->hasMany(Answer::class);
    }
}
