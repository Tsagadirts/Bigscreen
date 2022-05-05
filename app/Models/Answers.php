<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 

    public function questions(){
        return $this->belongsTo(Questions::class);
    }  
    
    protected $fillable = [         
        "question_id",
        "surveyed_id",
        "answer"
    ]; 
}
