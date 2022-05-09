@extends('layouts.master')

@section("content")
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div>
    <canvas id="myChart"></canvas>
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
        label: 'My First dataset',
        backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(255, 25, 41)'
        ],
        data: [{{$answer6a}},{{$answer6b}},{{$answer6c}},{{$answer6d}}],
      }]
    };
  
    const config = {
        type: 'pie',
        data: data,
    };
    const myChart = new Chart(
    document.getElementById('myChart'),
    config);
  </script>

@endsection
