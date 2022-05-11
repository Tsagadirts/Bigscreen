@extends('layouts.master')

@section("content")
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div>
    <canvas id="answer6chart"></canvas>
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
        data: [{{$quantity6['Occulus Rift/s']}}, {{$quantity6['HTC Vive']}}, {{$quantity6['Windows Mixed Reality']}},{{$quantity6['PSVR']}}],
        
      }]
    };
  
    const config = {
        type: 'pie',
        data: data,
    };
    const myChart = new Chart(
    document.getElementById('answer6chart'),
    config);
  </script>

// <br>

// <div>
//   <canvas id="answer7chart"></canvas>
//   </div>
//   <script>
//     const labels = [
//       'SteamVR',
//       'Occulus store',
//       'Viveport',
//       'Playstation VR',
//       'Google Play',
//       'Windows store'
//     ];
  
//     const data = {
//       labels: labels,
//       datasets: [{
//         label: 'My First dataset',
//         backgroundColor: [
//         'rgb(255, 99, 132)',
//         'rgb(54, 162, 235)',
//         'rgb(255, 205, 86)',
//         'rgb(255, 25, 41)'
//         ],


//       }]
//     };
  
//     const config = {
//         type: 'pie',
//         data: data,
//     };

//     const answer7chart = new Chart(
//     document.getElementById('answer7chart'),
//     config);
//   </script>

@endsection
