<?php

namespace App\Http\Controllers;
use App\Models\Answer;



use Illuminate\Http\Request;

class ChartJsController extends Controller
{

    // public function create()
    // {
    //     return view('answer');
    // }

    // public function store(Request $request)
    // {
    //     $chart = new chart([
    //       'user_email' => $request->get('user_email'),
    //     //   'token' => $request->get('token'),
    //     ]);
    //     $chart->save();

    //     return redirect('chart');
    // }

    // public function index()
    // {
    //     return view('statistic');
    // }

    public function chart()
      {
        $user = DB::table('answers')
        ->where('answers', 6, 7, 10)
        ->select('surveyed_id', DB::raw('SUM(quantity) as quantity'))
        // ->groupBy('answer.body')
        // ->orderBy('quantity', 'desc')
        ->pluck('body', 'quantity');
      }
}

// public function index()
//     {
 
//  $record = User::select(\DB::raw("COUNT(*) as count"), 
//     \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
//     ->where('created_at', '>', Carbon::today()->subDay(6))
//     ->groupBy('day_name','day')
//     ->orderBy('day')
//     ->get();
  
//      $data = [];
 
//      foreach($record as $row) {
//         $data['label'][] = $row->day_name;
//         $data['data'][] = (int) $row->count;
//       }
 
//     $data['chart_data'] = json_encode($data);
//     return view('chart-js', $data);
//     }
