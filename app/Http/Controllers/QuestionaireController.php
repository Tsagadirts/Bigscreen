<?php

namespace App\Http\Controllers;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Surveyed;
use Illuminate\Http\Request;


class QuestionaireController extends Controller
{
    //la function sondage qui s'occupe de l'affichage du formulaire des questions
    public function sondage(Request $request){
        
        return view('users.sondage', ['questions' => Question::all()]);  
    }
    //la fonction message qui s'occupe de l'affichage de page message et qui contient l'url 
    public function message(Request $request){
        $results=$request->all();
        $email=$results[1];
        $token=bin2hex(random_bytes(5));
        //sauvegarder les donnéer de surveyed(email et token )dans la base de donnée
        $surveyed= new Surveyed();
        $surveyed->user_email=$email;
        $surveyed->token=$token;
        $surveyed->save();
        //sauvegarder les reponses dans la base de donnée
        for($i=1;$i<count($results);$i++){
            $answer= new Answer();
            $answer->question_id=$i;
            $answer->surveyed_id=$surveyed->id;
            $answer->answer=$results[$i];
            $answer->save();
        }
        //retourner la vue message
        return view('users.message',['token'=>$token]);
    }
        //fonction results qui s'occupe de l'affichage des questions avec leurs reponses
    public function result(Request $request){
        //recupération de token de chaque utilisateur et les mettre dans la varibale $token
        $token = $request->token;
        $user= Surveyed::where('token',$token)->first();
        //recupiration des identifiant de chaque utilisateur a partir de la table surveyed
        $surveyedId= $user->id;
        //recupirer tous les question avec la method call
        $questions= Question::all();
        //recuperer les reponses a partir de l'id de chaque utilisateur avec la method get
        $answers= Answer::where('surveyed_id',$surveyedId)->get();
        //retourner les resultats et les afficher dans la vue qu'on appelé results
        return view('users.results',['questions'=>$questions],['answers'=>$answers]);
    }    
}

