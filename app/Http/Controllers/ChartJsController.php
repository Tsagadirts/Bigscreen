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
    // on store les différents réponses a la questions six dans un tableau question_six
    $question_six = [
      'Occulus Rift/s' => 0,
      'HTC Vive' => 0, 
      'Windows Mixed Reality' => 0, 
      'PSVR' => 0
    ];
    // récupèr l'id de la question six et dans un foreach on store les différents réponses des utilisateurs
    // ceci permet en même temps de faire le compte de chaque réponse de la question six 
      $result_six = Answer::where('question_id','6')->get();                  
      foreach($result_six as $value){
        $question_six[$value->answer]++;
      }

    // on store les différents réponses a la questions sept dans un tableau question_sept
    $question_sept = [
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
        $question_sept[$val->answer]++;
      }

    // on store les différents réponses a la questions dix dans un tableau question_dix
    $question_dix = [
      'regarder des émissions TV en direct' => 0,
      'regarder des films' => 0,
      'jouer en solo' => 0, 
      'jouer en team' => 0
    ];
    // récupèr l'id de la question dix et dans un foreach on store les différents réponses des utilisateurs
    // ceci permet en même temps de faire le compte de chaque réponse de la question dix
      $res = Answer::where('question_id','10')->get();                  
      foreach($res as $val){
        $question_dix[$val->answer]++;
      }

    // on store les différents réponses a la questions onze dans un tableau question_onze
    $question_onze = [
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
        $question_onze[$val->answer]++;
      }

    // on store les différents réponses a la questions douze dans un tableau question_douze
    $question_douze = [
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
        $question_douze[$val->answer]++;
      }

    // on store les différents réponses a la questions treize dans un tableau question_treize
    $question_treize = [
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
        $question_treize[$val->answer]++;
      }

    // on store les différents réponses a la questions quartorce dans un tableau question_quatorze
    $question_quatorze = [
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
        $question_quatorze[$val->answer]++;
      }

    // on store les différents réponses a la questions quinze dans un tableau question_quinze
    $question_quinze = [
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
        $question_quinze[$val->answer]++;
      }

    // on fait appel aux resultat sur la vue home
    return view('admin.home',
    [
      'question_six' => $question_six,
      'question_sept' => $question_sept,
      'question_dix' => $question_dix,
      'question_onze' => $question_onze,
      'question_douze' => $question_douze,
      'question_treize' => $question_treize,
      'question_quatorze' => $question_quatorze,
      'question_quinze' => $question_quinze
    ]);
  }
}


