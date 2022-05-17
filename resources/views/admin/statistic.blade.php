@extends('layouts.admin')

@section("content")
<<<<<<< HEAD

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

=======
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
  
>>>>>>> 2fe89d7d0903968cbc82e48baef46abfdb2e66fd

  <script>

    const ctx = document.getElementById('chart_six');
    const ctx2 = document.getElementById('chart_seven');
    const ctx3 = document.getElementById('chart_ten');
    const ctx4 = document.getElementById('radar');

    const labels = [
      'Occulus Rift/s',
      'HTC Vive',
      'Windows Mixed Reality',
      'PSVR',
    ];
  
    const data6 = {
      labels: labels,
      datasets: [{
<<<<<<< HEAD
        label: 'Marque de casque',
=======
        label: 'Question 6',
>>>>>>> 2fe89d7d0903968cbc82e48baef46abfdb2e66fd
        backgroundColor: [
        'rgb(245, 67, 145)',
        'rgb(54, 162, 235)',
        'rgb(85, 237, 106)',
        'rgb(189, 112, 17)'
        ],
<<<<<<< HEAD
        data: [
          {{$quantity_six['Occulus Rift/s']}}, 
          {{$quantity_six['HTC Vive']}}, 
          {{$quantity_six['Windows Mixed Reality']}}, 
          {{$quantity_six['PSVR']}}
        ],
=======
        data: [{{$quantity6['Occulus Rift/s']}},
         {{$quantity6['HTC Vive']}}, 
         {{$quantity6['Windows Mixed Reality']}},
         {{$quantity6['PSVR']}}],
        
>>>>>>> 2fe89d7d0903968cbc82e48baef46abfdb2e66fd
      }]
    };
  
    const config6 = {
        type: 'pie',
        data: data6,
    };
<<<<<<< HEAD
    const chart_six = new Chart(ctx, config);
     
    const value = [
      'SteamVR',
      'Occulus store',
      'Viveport',
      'Playstation VR',
      'Google Play',
      'Windows store'
    ];

    const base = {
      labels: value,
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
        data: base,
    };
    const chart_seven = new Chart(ctx2, confi);

    const container = [
=======
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
>>>>>>> 2fe89d7d0903968cbc82e48baef46abfdb2e66fd
      'regarder des émissions TV en direct',
      'regarder des films',
      'jouer en solo',
      'jouer en team'
    ];
<<<<<<< HEAD

    const dat = {
      labels: container,
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
        data: dat,
    };
    const chart_ten = new Chart(ctx3, conf);

    const numbers = [
      '1',
      '2',
      '3',
      '4',
      '5'
    ];

    const bas = {
      labels: numbers,
      datasets: [{
        label: '',
        backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(255, 25, 41)'
        ],
        data: [
          {{$quantity['1']}},
          {{$quantity['2']}},
          {{$quantity['3']}},
          {{$quantity['4']}},
          {{$quantity['5']}},
        ],
      }]
    }; 
  
    const con = {
        type: 'radar',
        data: bas,
    };
    const radar = new Chart(ctx4, con);
  </script>
=======
  
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

>>>>>>> 2fe89d7d0903968cbc82e48baef46abfdb2e66fd

@endsection
