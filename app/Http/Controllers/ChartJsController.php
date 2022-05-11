<?php

namespace App\Http\Controllers;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Surveyed;
use Illuminate\Http\Request;

class ChartJsController extends Controller
{
    public function echart(Request $request)
    {
        $quantity6=['Occulus Rift/s'=>0,
        'HTC Vive'=>0,
        'Windows Mixed Reality'=>0,
        'PSVR'=>0
    ];
    
        $result = Answer::where('question_id','6')->get();
       foreach($result as $value ){
        $quantity6[$value->answer]++;
       }

       




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
    
    //     $answer7a = Answer::where('question_id','7')
    //                         ->where('answer','SteamVR')
    //                         ->count();
    //                         echo($answer7a);    
    //     $answer7b = Answer::where('question_id','7')
    //                         ->where('answer','Occulus store')
    //                         ->count();
    //                         echo($answer7b); 

    //     $answer7c = Answer::where('question_id','7')
    //                         ->where('answer','Viveport')
    //                         ->count();
    //                         echo($answer7c);  
            
    //     $answer7d = Answer::where('question_id','7')
    //                         ->where('answer','Playstation VR')
    //                         ->count();
    //                         echo($answer7d);   

    //     $answer7e = Answer::where('question_id','7')
    //                         ->where('answer','Google Play')
    //                         ->count();
    //                         echo($answer7e);

    //     $answer7f = Answer::where('question_id','7')
    //                         ->where('answer','Windows store')
    //                         ->count();
    //                      echo($answer7f);

         
    // $answer6quantity=[
    //     'answer6a'=>$answer6a,
    //     'answer6b'=>$answer6b,
    //     'answer6c'=>$answer6c,
    //     'answer6d'=>$answer6d,
    // ];   
    // $answer7quantity=[
    //         'answer7a'=>$answer7a,
    //         'answer7b'=>$answer7b,
    //         'answer7c'=>$answer7c,
    //         'answer7d'=>$answer7d,
    //         'answer7e'=>$answer7e,
    //         'answer7f'=>$answer7f];
         	
    	 return view('admin.statistic',[
             'quantity6'=>$quantity6,
             
         ]);
    }
}



