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

  public function sixChart(Request $request)
  {
                $quantity6 = [
                  'Occulus Rift/s' => 0,
                  'HTC Vive' => 0, 
                  'Windows Mixed Reality' => 0, 
                  'PSVR' => 0, 
                ];
                  $result = Answer::where('question_id','6')->get();                  
                  foreach($result as $value){
                    $quantity6[$result->answers];
                  }

     return view('admin.statistic',['quantity6'=>$quantity6]);
  }

  // public function sevenChart(Request $request)
  // {
  //     $answer6a = Answer::where('question_id','6')
  //     ->where('answer','Occulus Rift/s')
  //     ->count();
  //     echo($answer6a);
                              // [(SteamVR, Occulus store, Viveport, Playstation VR, Google
                              // Play, Windows store)]
  //     $answer6b = Answer::where('question_id','6')
  //                 ->where('answer','HTC Vive')
  //                 ->count();
  //         echo($answer6b);  
          
  //     $answer6c = Answer::where('question_id','6')
  //         ->where('answer','Windows Mixed Reality')
  //         ->count();
  //        echo($answer6c);   

  //     $answer6d = Answer::where('question_id','6')
  //                         ->where('answer','PSVR')
  //                         ->count();
  //                 echo($answer6d);


        
  //    return view('admin.statistic',['answer6a'=>$answer6a, 'answer6b'=>$answer6b,'answer6c'=>$answer6c,'answer6d'=>$answer6d]);
  // }

  // public function tenChart(Request $request)
  // {
  //     $tenA = Answer::where('question_id','10')
  //     ->where('answer','regarder des émissions TV en direct')
  //     ->count();
  //     echo($tenA);
                         
  //     $tenB = Answer::where('question_id','10')
  //                 ->where('answer','regarder des films')
  //                 ->count();
  //         echo($tenB);  
          
  //     $tenC = Answer::where('question_id','10')
  //         ->where('answer','jouer en solo')
  //         ->count();
  //        echo($tenC);   

  //     $tenD = Answer::where('question_id','10')
  //                         ->where('answer','jouer en team')
  //                         ->count();
  //                 echo($tenD);


        
  //    return view('admin.statistic',['tenA'=>$tenA, 'tenB'=>$tenB,'tenC'=>$tenC,'tenD'=>$tenD]);
  // }
}
