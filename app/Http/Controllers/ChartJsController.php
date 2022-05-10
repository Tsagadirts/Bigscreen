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
    $questions= Question::all();
    $answers= Answer::all();
    return view('admin.answer', ['questions'=> $questions],['answers'=> $answers]); 
}
    public function echart(Request $request)
    {
        $answer6a = Answer::where('question_id','6')
                            // ->where('answer','Occulus Rift/s')
                            ->count();
                            echo($answer6a);    

        // $answer6b = Answer::where('question_id','6')
        //             ->where('answer','HTC Vive')
        //             ->count();
        //     echo($answer6b);  
            
        // $answer6c = Answer::where('question_id','6')
        //     ->where('answer','Windows Mixed Reality')
        //     ->count();
        //    echo($answer6c);   

        // $answer6d = Answer::where('question_id','6')
        //                     ->where('answer','PSVR')
        //                     ->count();
        //             echo($answer6d);


         	
    	 return view('admin.statistic',['answer6a'=>$answer6a,'answer6b'=>$answer6b,'answer6c'=>$answer6c,'answer6d'=>$answer6d]);
    }
}
