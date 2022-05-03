<?php

namespace App\Http\Controllers;
use App\Models\Answers;
use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionaireController extends Controller
{
    public function sondage(){
        // on va appeler les différents products
        return view('users.sondage', ['questions' => Questions::all()]);  
    }







    /********************************************* Admin Controller *******************************************/

    public function index(){
        // on fait appel au questionnaire
        return view('admin.index');  
    }

}
