@extends('layouts.admin')

@section("content")

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="charts">
  <div class= "charts d-flex row align-items-center justify-content-center mx-auto vh-100">
    <div class =" d-flex col-4 graph">
      <canvas class ="w-100 m-2" id="chart_six"></canvas>
    </div>
    <div class =" d-flex col-4 graph">
      <canvas class =" w-100 m-2" id="chart_seven"></canvas>
    </div>
    <div class ="d-flex col-4 graph m-1">
      <canvas class =" w-100 m-2" id="chart_ten"></canvas>
    </div>
    <div class =" d-flex col-4 graph">
        <canvas class ="w-100 m-2" id="radar"></canvas>
    </div>
  </div>
</div>


  <script>

    const ctx = document.getElementById('chart_six');
    const ctx2 = document.getElementById('chart_seven');
    const ctx3 = document.getElementById('chart_ten');

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
    const chart_six = new Chart(ctx, config);
     
    const mots = [
      'SteamVR',
      'Occulus store',
      'Viveport',
      'Playstation VR',
      'Google Play',
      'Windows store'
    ];

    const live = {
      labels: mots,
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
        ],
      }]
    }; 
  
    const confi = {
        type: 'pie',
        data: live,
    };
    const chart_seven = new Chart(ctx2, confi);

    const words = [
      'regarder des émissions TV en direct',
      'regarder des films',
      'jouer en solo',
      'jouer en team'
    ];

    const base = {
      labels: words,
      datasets: [{
        label: '',
        backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(255, 25, 41)'
        ],
        data: [
          {{$quantity_ten['regarder des émissions TV en direct']}}, 
          {{$quantity_ten['regarder des films']}}, 
          {{$quantity_ten['jouer en solo']}}, 
          {{$quantity_ten['jouer en team']}}
        ],
      }]
    }; 
  
    const conf = {
        type: 'pie',
        data: base,
    };
    const chart_ten = new Chart(ctx3, conf);
  </script>

@endsection
