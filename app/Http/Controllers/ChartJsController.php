<?php

namespace App\Http\Controllers;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Surveyed;
use Illuminate\Http\Request;

class ChartJsController extends Controller
{
  public function questions(){
    // on fait appel au questionnaire
    return view('admin.questionaire', ['questions' => Question::all()]);  
  }

  public function answers(){
    // on fait appel au questions et au réponses
    return view('admin.answer', 
    ['questions'=> Question::all()],
    ['answers'=> Answer::orderBy('created_at', 'desc')->get()]);
  }

  public function charts(Request $request)
  {
    // methode pour afficher le graphe de la question six
    // on store les différents réponses a la questions six dans un tableau quantity_six
    $quantity_six = [
      'Occulus Rift/s' => 0,
      'HTC Vive' => 0, 
      'Windows Mixed Reality' => 0, 
      'PSVR' => 0
    ];
    // récupèr l'id de la question six et dans un foreach on store les différents réponses des utilisateurs
    // ceci permet en même temps de faire le compte de chaque réponse de la question six 
      $result_six = Answer::where('question_id','6')->get();                  
      foreach($result_six as $value){
        $quantity_six[$value->answer]++;
      }

    // on store les différents réponses a la questions sept dans un tableau quantity_seven
    $quantity_seven = [
      'SteamVR' => 0,
      'Occulus store' => 0,
      'Viveport' => 0, 
      'Playstation VR' => 0, 
      'Google Play' => 0,
      'Windows store' => 0 
    ];
    // récupèr l'id de la question sept et dans un foreach on store les différents réponses des utilisateurs
    // ceci permet en même temps de faire le compte de chaque réponse de la question sept
      $res = Answer::where('question_id','7')->get();                  
      foreach($res as $val){
        $quantity_seven[$val->answer]++;
      }

    // on store les différents réponses a la questions dix dans un tableau quantity_ten
    $quantity_ten = [
      'regarder des émissions TV en direct' => 0,
      'regarder des films' => 0,
      'jouer en solo' => 0, 
      'jouer en team' => 0
    ];
    // récupèr l'id de la question dix et dans un foreach on store les différents réponses des utilisateurs
    // ceci permet en même temps de faire le compte de chaque réponse de la question dix
      $res = Answer::where('question_id','10')->get();                  
      foreach($res as $val){
        $quantity_ten[$val->answer]++;
      }

    // on store les différents réponses a la questions onze dans un tableau quantity_eleven
    $quantity_eleven = [
      '1' => 0,
      '2' => 0,
      '3' => 0,
      '4' => 0,
      '5' => 0
    ];
    // récupèr l'id de la question onze et dans un foreach on store les différents réponses des utilisateurs
    // ceci permet en même temps de faire le compte de chaque réponse de la question onze
      $res = Answer::where('question_id','11')->get();                  
      foreach($res as $val){
        $quantity_eleven[$val->answer]++;
      }

    // on store les différents réponses a la questions douze dans un tableau quantity_twelve
    $quantity_twelve = [
      '1' => 0,
      '2' => 0,
      '3' => 0,
      '4' => 0,
      '5' => 0
    ];
    // récupèr l'id de la question douze et dans un foreach on store les différents réponses des utilisateurs
    // ceci permet en même temps de faire le compte de chaque réponse de la question douze
      $res = Answer::where('question_id','12')->get();                  
      foreach($res as $val){
        $quantity_twelve[$val->answer]++;
      }

    // on store les différents réponses a la questions treize dans un tableau quantity_thirteen
    $quantity_thirteen = [
      '1' => 0,
      '2' => 0,
      '3' => 0,
      '4' => 0,
      '5' => 0
    ];
    // récupèr l'id de la question treize et dans un foreach on store les différents réponses des utilisateurs
    // ceci permet en même temps de faire le compte de chaque réponse de la question treize
      $res = Answer::where('question_id','13')->get();                  
      foreach($res as $val){
        $quantity_thirteen[$val->answer]++;
      }

    // on store les différents réponses a la questions quartorce dans un tableau quantity_fourteen
    $quantity_fourteen = [
      '1' => 0,
      '2' => 0,
      '3' => 0,
      '4' => 0,
      '5' => 0
    ];
    // récupèr l'id de la question quartorce et dans un foreach on store les différents réponses des utilisateurs
    // ceci permet en même temps de faire le compte de chaque réponse de la question quartorce
      $res = Answer::where('question_id','14')->get();                  
      foreach($res as $val){
        $quantity_fourteen[$val->answer]++;
      }

    // on store les différents réponses a la questions quinze dans un tableau quantity_fifteen
    $quantity_fifteen = [
      '1' => 0,
      '2' => 0,
      '3' => 0,
      '4' => 0,
      '5' => 0
    ];
    // récupèr l'id de la question quinze et dans un foreach on store les différents réponses des utilisateurs
    // ceci permet en même temps de faire le compte de chaque réponse de la question quinze
      $res = Answer::where('question_id','15')->get();                  
      foreach($res as $val){
        $quantity_fifteen[$val->answer]++;
      }

    // on fait appel aux resultat sur la vue home
    return view('admin.home',
    [
      'quantity_six' => $quantity_six,
      'quantity_seven' => $quantity_seven,
      'quantity_ten' => $quantity_ten,
      'quantity_eleven' => $quantity_eleven,
      'quantity_twelve' => $quantity_twelve,
      'quantity_thirteen' => $quantity_thirteen,
      'quantity_fourteen' => $quantity_fourteen,
      'quantity_fifteen' => $quantity_fifteen
    ]);
  }
}
