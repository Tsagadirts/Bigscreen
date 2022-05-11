@extends('layouts.admin')

@section("content")

<div class="cont">
<div class="myChart">
    <canvas id="pieChart" width="100" height="100"></canvas>
</div>
<div>
    {{-- <canvas id="radarChart"></canvas> --}}
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div>
    <canvas id="pieChart"></canvas>
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
          {{$quantity6['Occulus Rift/s']}}, 
          {{$quantity6['HTC Vive']}}, 
          {{$quantity6['Windows Mixed Reality']}}, 
          {{$quantity6['PSVR']}}
        ]
      }]
    };
  
    const config = {
        type: 'pie',
        data: data,
    };
    const pieChart = new Chart(
    document.getElementById('pieChart'),
    config);
  </script>

{{-- <div class="m">
    <canvas id="pieChart" width="100" height="100"></canvas>
</div> --}}
{{-- <script>
    const labels = [
      'regarder des émissions TV en direct',
      'regarder des films',
      'jouer en solo',
      'jouer en team',
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
        data: [{{$tenA}}, {{$tenB}}, {{$tenC}}, {{$tenD}}]
      }]
    };
  
    const config = {
        type: 'pie',
        data: data,
    };
    const pieChart = new Chart(
    document.getElementById('pieChart'),
    config);
  </script> --}}

@endsection
