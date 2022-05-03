<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 
    // protected $casts = [
    //     'options' => 'array'
    // ];

public function answers(){
    return $this->hasMany(Answers::class);
<<<<<<< HEAD
}    



=======
    }     
>>>>>>> admin
}
