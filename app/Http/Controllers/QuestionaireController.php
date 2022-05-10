<?php

namespace App\Http\Controllers;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Surveyed;
use Illuminate\Http\Request;


class QuestionaireController extends Controller
{
    public function sondage(){
        
        return view('users.sondage', ['questions' => Question::all()]);  
    }

    public function message(Request $request){
        // $validatedData = $request->validateWithBag('results', [
        //     '1' => ['required'],
        // ]);
        $results=$request->all();
        $email=$results[1];
        $token=bin2hex(random_bytes(5));
        //save surveyed data in database
        $surveyed= new Surveyed();
        $surveyed->user_email=$email;
        $surveyed->token=$token;
        $surveyed->save();
        //save answer in database
        for($i=1;$i<count($results);$i++){
            $answer= new Answer();
            $answer->question_id=$i;
            $answer->surveyed_id=$surveyed->id;
            $answer->answer=$results[$i];
            $answer->save();
        }
        return view('users.message',['token'=>$token]);
    }

    public function result(Request $request){
        $token = $request->token;
        $user= Surveyed::where('token',$token)->first();
        $surveyedId= $user->id;
        $questions= Question::all();
        $answers= Answer::where('surveyed_id',$surveyedId)->get();
        return view('users.results',['questions'=>$questions],['answers'=>$answers]);
    }
    /********************************************* Admin Controller *******************************************/


    // public function questions(){
    //     // on fait appel au questionnaire
    //     return view('admin.questionaire', ['questions' => Question::all()]);  
    // }

    // public function answers(){
    //     $questions= Question::all();
    //     $answers= Answer::all();
    //     return view('admin.answer', ['questions'=> $questions],['answers'=> $answers]); 
    // }

    // public function echart(Request $request)
    // {
    //     $answer6a = Answer::where('question_id','6')
    //                         ->where('answer','Occulus Rift/s')
    //                         ->count();
    //                         echo($answer6a);    

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


         	
    // 	 return view('admin.statistic',['answer6a'=>$answer6a,'answer6b'=>$answer6b,'answer6c'=>$answer6c,'answer6d'=>$answer6d]);
    // }
}

