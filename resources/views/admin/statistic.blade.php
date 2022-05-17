@extends('layouts.master')

@section("content")
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <div class="row">
    <div class="col-12 col-md-6">
      <canvas id="answer6chart"></canvas>
      <legend class="text-center">Question6</legend>
    </div>
  
    <div class="col-12 col-md-6">
      <canvas id="answer7chart"></canvas>
      <legend class="text-center">Question7</legend>
    </div>
  
    <div class="col-12 col-md-6">
      <canvas id="answer10chart"></canvas>
      <legend class="text-center">Question10</legend>
    </div>
  
    <div class="col-12 col-md-6">
      <canvas id="answer11chart"></canvas>
      <legend class="text-center">Question de 11 à 15</legend>
    </div>
  </div>
  

  <script>
    const labels = [
      'Occulus Rift/s',
      'HTC Vive',
      'Windows Mixed Reality',
      'PSVR',
    ];
  
    const data6 = {
      labels: labels,
      datasets: [{
        label: 'Question 6',
        backgroundColor: [
        'rgb(245, 67, 145)',
        'rgb(54, 162, 235)',
        'rgb(85, 237, 106)',
        'rgb(189, 112, 17)'
        ],
        data: [{{$quantity6['Occulus Rift/s']}},
         {{$quantity6['HTC Vive']}}, 
         {{$quantity6['Windows Mixed Reality']}},
         {{$quantity6['PSVR']}}],
        
      }]
    };
  
    const config6 = {
        type: 'pie',
        data: data6,
    };
    const myChart = new Chart(
    document.getElementById('answer6chart'),
    config6);

    const labels7 = [
      'SteamVR',
      'Occulus store',
      'Viveport',
      'Playstation VR',
      'Google Play',
      'Windows store'
    ];
  
    const data7 = {
      labels: labels7,
      datasets: [{
        label: 'Question 7',
        backgroundColor: [
        'rgb(245, 67, 145)',
        'rgb(54, 162, 235)',
        'rgb(85, 237, 106)',
        'rgb(189, 112, 17)',
        'rgb(193, 190, 190)',
        'rgb(75, 174, 184)'
        ],
        data: [{{$quantity7['SteamVR']}},
        {{$quantity7['Occulus store']}},
        {{$quantity7['Viveport']}},
        {{$quantity7['Playstation VR']}},
        {{$quantity7['Google Play']}},
        {{$quantity7['Windows store']}}]
      }]
    };
  
    const config7 = {
        type: 'pie',
        data: data7,
    };

    const answer7chart = new Chart(
    document.getElementById('answer7chart'),
    config7);
    
  
  const labels10 = [
      'regarder des émissions TV en direct',
      'regarder des films',
      'jouer en solo',
      'jouer en team'
    ];
  
    const data10 = {
      labels: labels10,
      datasets: [{
          label: 'Question 10',
          backgroundColor: [
        'rgb(245, 67, 145)',
        'rgb(54, 162, 235)',
        'rgb(85, 237, 106)',
        'rgb(189, 112, 17)'
        ],
        data: [{{$quantity10['regarder des émissions TV en direct']}},
        {{$quantity10['regarder des films']}},
        {{$quantity10['jouer en solo']}},
        {{$quantity10['jouer en team']}}]
      }]
    };
  
    const config10 = {
        type: 'pie',
        data: data10,
    };

    const answer10chart = new Chart(
    document.getElementById('answer10chart'),
    config10);
  

  const data11= {
  labels: [
    '1',
    '2',
    '3',
    '4',
    '5'
  ],
  datasets: [{
    label: 'question 11',
    data: [{{$quantity11['1']}},{{$quantity11['2']}},{{$quantity11['3']}},{{$quantity11['4']}},{{$quantity11['5']}}],
    fill: true,
    backgroundColor: 'rgba(245, 67, 145, 0.30)',
    borderColor: 'rgb(250, 37, 181)',
    pointBackgroundColor: 'rgb(245, 67, 145)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(245, 67, 145)'
  },
  {
    label: 'question 12',
    data: [{{$quantity12['1']}},{{$quantity12['2']}},{{$quantity12['3']}},{{$quantity12['4']}},{{$quantity12['5']}}],
    fill: true,
    backgroundColor: 'rgba(54, 162, 235, 0.30)',
    borderColor: 'rgb(54, 162, 235)',
    pointBackgroundColor: 'rgb(54, 162, 235)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(54, 162, 235)'
  },
  {
    label: 'question 13',
    data: [{{$quantity13['1']}},{{$quantity13['2']}},{{$quantity13['3']}},{{$quantity13['4']}},{{$quantity13['5']}}],
    fill: true,
    backgroundColor: 'rgba(85, 237, 106, 0.30)',
    borderColor: 'rgb(18, 188, 106)',
    pointBackgroundColor: 'rgb(85, 237, 106)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(85, 237, 106)'
  },
  {
    label: 'question 14',
    data: [{{$quantity14['1']}},{{$quantity14['2']}},{{$quantity14['3']}},{{$quantity14['4']}},{{$quantity14['5']}}],
    fill: true,
    backgroundColor: 'rgba(189, 112, 17, 0.25)',
    borderColor: 'rgb(155, 91, 13)',
    pointBackgroundColor: 'rgb(189, 112, 17)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(189, 112, 17)'
  },

   {
    label: 'question 15',
    data: [{{$quantity15['1']}},{{$quantity15['2']}},{{$quantity15['3']}},{{$quantity15['4']}},{{$quantity15['5']}}],
    fill: true,
    backgroundColor: 'rgba(193, 190, 190, 0.25)',
    borderColor: 'rgb(71, 63, 63)',
    pointBackgroundColor: 'rgb(193, 190, 190)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(193, 190, 190)'
  }
]
};
    const config11 = {
      type: 'radar',
      data: data11,
      options: {
        elements: {
          line: {
            borderWidth: 3
          }
        }
      },
    };
    const answer11chart = new Chart(
    document.getElementById('answer11chart'),
    config11);


  </script>


@endsection
