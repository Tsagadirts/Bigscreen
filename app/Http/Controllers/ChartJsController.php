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
    return view('admin.answer', ['questions'=> Question::all()],['answers'=> Answer::all()]);
  }

  public function charts(Request $request)
  {
    $quantity_six = [
      'Occulus Rift/s' => 0,
      'HTC Vive' => 0, 
      'Windows Mixed Reality' => 0, 
      'PSVR' => 0, 
    ];
      $result_six = Answer::where('question_id','6')->get();                  
      foreach($result_six as $value){
        $quantity_six[$value->answer]++;
      };

    $quantity_seven = [
      'SteamVR' => 0,
      'Occulus store' => 0,
      'Viveport' => 0, 
      'Playstation VR' => 0, 
      'Google Play'=> 0,
      'Windows store' => 0, 
    ];
      $result_seven = Answer::where('question_id','7')->get();                  
      foreach($result_seven as $value){
        $quantity_seven[$value->answer]++;
      }


    return view('admin.statistic',
    [
      'quantity_six' => $quantity_six,
      'quantity_seven' => $quantity_seven,
      // 'quantity_six' => $quantity_six,
    ]);
  }
}
