<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Answer extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 

    public function questions(){
        // relation belongsTo signifie que chaque question contient une réponse
        return $this->belongsTo(Questions::class);
    }  
    
}
