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
    // $questions= Question::all();
    // $answers= Answer::all();
    return view('admin.answer', ['questions'=> Question::all()],['answers'=> Answer::orderBy('created_at', 'desc')->get()]);
  }

  public function charts(Request $request)
  {
    $quantity_six = [
      'Occulus Rift/s' => 0,
      'HTC Vive' => 0, 
      'Windows Mixed Reality' => 0, 
      'PSVR' => 0
    ];
      $result_six = Answer::where('question_id','6')->get();                  
      foreach($result_six as $value){
        $quantity_six[$value->answer]++;
      }

    $quantity_seven = [
      'SteamVR' => 0,
      'Occulus store' => 0,
      'Viveport' => 0, 
      'Playstation VR' => 0, 
      'Google Play' => 0,
      'Windows store' => 0 
    ];
      $res = Answer::where('question_id','7')->get();                  
      foreach($res as $val){
        $quantity_seven[$val->answer]++;
      }

    $quantity_ten = [
      'regarder des émissions TV en direct' => 0,
      'regarder des films' => 0,
      'jouer en solo' => 0, 
      'jouer en team' => 0
    ];
      $res = Answer::where('question_id','10')->get();                  
      foreach($res as $val){
        $quantity_ten[$val->answer]++;
      }

    $quantity = [
      '1' => 0,
      '2' => 0,
      '3' => 0, 
      '4' => 0,
      '5' => 0
    ];
      $res = Answer::where('question_id','11')->get();                  
      foreach($res as $val){
        $quantity[$val->answer]++;
      }

    return view('admin.home',
    [
      'quantity_six' => $quantity_six,
      'quantity_seven' => $quantity_seven,
      'quantity_ten' => $quantity_ten,
      'quantity' => $quantity,
    ]);
  }
}
