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
    
        $result6 = Answer::where('question_id','6')->get();
        foreach($result6 as $value ){
        $quantity6[$value->answer]++;
       }

       $quantity7=['SteamVR'=>0,
        'Occulus store'=>0,
        'Viveport'=>0,
        'Playstation VR'=>0,
        'Google Play'=>0,
        'Windows store'=>0
        ];
       
        $result7 = Answer::where('question_id','7')->get();
        foreach($result7 as $value ){
        $quantity7[$value->answer]++;
       }

       $quantity10=['regarder des émissions TV en direct'=>0,
        'regarder des films'=>0,
        'jouer en solo'=>0,
        'jouer en team'=>0
        ];
       
        $result10 = Answer::where('question_id','10')->get();
        foreach($result10 as $value ){
        $quantity10[$value->answer]++;
       }
        
       $quantity11=['1'=>0,
        '2'=>0,
        '3'=>0,
        '4'=>0,
        '5'=>0
        ];
       
        $result11 = Answer::where('question_id','11')->get();
        foreach($result11 as $value ){
        $quantity11[$value->answer]++;
       }

       $quantity12=['1'=>0,
        '2'=>0,
        '3'=>0,
        '4'=>0,
        '5'=>0
        ];
       
        $result12 = Answer::where('question_id','12')->get();
        foreach($result12 as $value ){
        $quantity12[$value->answer]++;
       }

       $quantity13=['1'=>0,
        '2'=>0,
        '3'=>0,
        '4'=>0,
        '5'=>0
        ];
       
        $result13 = Answer::where('question_id','13')->get();
        foreach($result13 as $value ){
        $quantity13[$value->answer]++;
       }

       $quantity14=['1'=>0,
       '2'=>0,
       '3'=>0,
       '4'=>0,
       '5'=>0
       ];
      
       $result14 = Answer::where('question_id','14')->get();
       foreach($result14 as $value ){
       $quantity14[$value->answer]++;
      }

       $quantity15=['1'=>0,
        '2'=>0,
        '3'=>0,
        '4'=>0,
        '5'=>0
        ];
       
        $result15 = Answer::where('question_id','15')->get();
        foreach($result15 as $value ){
        $quantity15[$value->answer]++;
       }
         	
    	 return view('admin.statistic',[
             'quantity6'=>$quantity6,
             'quantity7'=>$quantity7,
             'quantity10'=>$quantity10,
             'quantity11'=>$quantity11,
             'quantity12'=>$quantity12,
             'quantity13'=>$quantity13,
             'quantity14'=>$quantity14,
             'quantity15'=>$quantity15
         ]);
    }
}



