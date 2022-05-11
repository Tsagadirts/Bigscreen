@extends('layouts.admin')

@section("content")

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <div class="myChart">
    <canvas id="chart_six"></canvas>
  </div>

  <div class="myChart">
    <canvas id="chart_seven"></canvas>
  </div>

  <script>
    const labels = [
      'Occulus Rift/s',
      'HTC Vive',
      'Windows Mixed Reality',
      'PSVR',
    ];
  
    const data = {
      labels: labels,
      datasets: [{
        label: 'Marque de casque',
        backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(255, 25, 41)'
        ],
        data: [
          {{$quantity_six['Occulus Rift/s']}}, 
          {{$quantity_six['HTC Vive']}}, 
          {{$quantity_six['Windows Mixed Reality']}}, 
          {{$quantity_six['PSVR']}}
        ],
      }]
    };
  
    const config = {
        type: 'pie',
        data: data,
    };
    const chart_six = new Chart(
    document.getElementById('chart_six'),
    config);

/*******************************************************************************************************/    
  
    const labels = [
      'SteamVR',
      'Occulus store',
      'Viveport',
      'Playstation VR',
      'Google Play',
      'Windows store'
    ];
  
    const data = {
      labels: labels,
      datasets: [{
        label: '',
        backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(255, 25, 41)'
        ],
        data: [
          {{$quantity_seven['SteamVR']}}, 
          {{$quantity_seven['Occulus store']}}, 
          {{$quantity_seven['Viveport']}}, 
          {{$quantity_seven['Playstation VR']}},
          {{$quantity_seven['Google Play']}},
          {{$quantity_seven['Windows store']}}
        ]
      }]
    }; 
  
    const config = {
        type: 'pie',
        data: data,
    };
    const chart_seven = new Chart(
    document.getElementById('chart_seven'),
    config);
  </script>

@endsection
