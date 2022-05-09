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
        $answer6 = Answer::where('question_id','6')
                            ->where('answer','Windows Mixed Reality')
                            ->count();
                    dd($answer6);

        // $answer6 = Answer::where('question_id','6')
        //             ->where('answer','HTC Vive')
        //             ->count();
        //     echo($answer6); 
            
        // $answer6 = Answer::where('question_id','6')
        //     ->where('answer','Windows Mixed Reality,')
        //     ->count();
        //    echo($answer6);   

        // $answer6 = Answer::where('question_id','6')
        //                     ->where('answer','PSVR')
        //                     ->count();
        //             echo($answer6);


                            
    	$answer7 = Answer::where('question_id','7')->get();
        $answer10 = Answer::where('question_id','10')->get();
        $answer6ChartData=[];
        $i=0;
        $j=0;
        $k=0;   
        $l=0;
    	foreach($answer6 as $answer){
            echo($answer->answer);
            if($answer->answer == 'Occulus Rift/s'){
                $i++;
            }
            if($answer->answer == 'HTC Vive'){
                $j++;
            }
            if($answer->answer == 'Windows Mixed Reality'){
                $k++;
            }
            if($answer->answer == 'PSVR'){
               $l++;
            }
            
        }
        $answer6ChartData[]=["Occulus Rift/s"=>$i];
        $answer6ChartData[]=["HTC Vive"=>$j];
        $answer6ChartData[]=["Windows Mixed Reality"=>$k];
        $answer6ChartData[]=["PSVR"=>$l];
        dd($answer6ChartData);
        // foreach($answer7 as $answer){
        //     echo($answer->answer);
        //     $answer7_count = count($answer7);
        // }

        // foreach($answer10 as $answer){
        //     echo($answer->answer);
        //     $answer10_count = count($answer10);
        // }
    
         	
    	// return view('admin.statistic',compact(['answer6_count'=>$answer6_count,'answer7_count'=>$answer7_count,'answer10_count'=>$answer10_count]));
    }
}

