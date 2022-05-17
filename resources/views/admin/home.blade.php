@extends('layouts.admin')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

{{-- le canvas permet l'affichage des graphes --}}
{{-- chaques graphe contient un id différent que l'on va ensuite utiliser pour configiurer le graphe --}}
<div class= "charts d-flex row align-items-center justify-content-center mx-auto">
    <div class ="bg-light d-flex col-4 graph m-1">
        <canvas class ="w-100 m-2" id="chart_six"></canvas>
    </div>
    <div class ="bg-light d-flex col-4 graph m-1">
        <canvas class ="w-100 m-2" id="chart_seven"></canvas>
    </div>
    <div class ="bg-light d-flex col-4 graph m-1">
        <canvas class ="w-100 m-2" id="chart_ten"></canvas>
    </div>
    <div class ="bg-light d-flex col-4 graph m-1">
        <canvas class ="w-100 m-2" id="rad"></canvas>
    </div>
</div>
    
<script>

// on passe le même id dans des constante que dans le canvas
const ctx = document.getElementById('chart_six');
const ctx2 = document.getElementById('chart_seven');
const ctx3 = document.getElementById('chart_ten');
const ctx4 = document.getElementById('rad');

// on store les différents réponses a la questions six dans un tableau labels
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
    // on fait a la variable défini dans le controller pour chaque responses
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
    
// on store les différents réponses a la questions sept dans un tableau labels
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
    'rgb(255, 25, 41)',
    'rgb(127, 255, 212)',
    'rgb(0, 128, 0)',

    ],
    // on fait a la variable défini dans le controller pour chaque responses
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

// on store les différents réponses a la questions dix dans un tableau labels
const container = [
    'regarder des émissions TV en direct',
    'regarder des films',
    'jouer en solo',
    'jouer en team'
];
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
    // on fait a la variable défini dans le controller pour chaque responses
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


const bas = {
// on store les différents réponses des questions onze a quinze dans un tableau labels
labels: ['1','2','3','4','5'],

  datasets: [{
    label: 'Eleven',
    // on fait appel a la variable défini dans le controller pour chaque responses
    data: [
            {{$quantity_eleven['1']}},
            {{$quantity_eleven['2']}},
            {{$quantity_eleven['3']}},
            {{$quantity_eleven['4']}},
            {{$quantity_eleven['5']}}
        ],
    fill: true,
    backgroundColor: 'rgba(255, 99, 132)',
    // borderColor: 'rgb(250, 37, 181)',
    // pointBackgroundColor: 'rgb(245, 67, 145)',
    // pointBorderColor: '#fff',
    // pointHoverBackgroundColor: '#fff',
    // pointHoverBorderColor: 'rgb(245, 67, 145)'
  }, {
    label: 'Twelve',
    // on fait appel a la variable défini dans le controller pour chaque responses
    data: [
            {{$quantity_twelve['1']}},
            {{$quantity_twelve['2']}},
            {{$quantity_twelve['3']}},
            {{$quantity_twelve['4']}},
            {{$quantity_twelve['5']}}
        ],
    fill: true,
    backgroundColor: 'rgba(54, 162, 235)',
    // borderColor: 'rgb(54, 162, 235)',
    // pointBackgroundColor: 'rgb(54, 162, 235)',
    // pointBorderColor: '#fff',
    // pointHoverBackgroundColor: '#fff',
    // pointHoverBorderColor: 'rgb(54, 162, 235)'
  }, {
    label: 'Thirteen',
    // on fait appel a la variable défini dans le controller pour chaque responses
    data: [
            {{$quantity_thirteen['1']}},
            {{$quantity_thirteen['2']}},
            {{$quantity_thirteen['3']}},
            {{$quantity_thirteen['4']}},
            {{$quantity_thirteen['5']}}
        ],
    fill: true,
    backgroundColor: 'rgba(255, 205, 86)',
    // borderColor: 'rgb(18, 188, 106)',
    // pointBackgroundColor: 'rgb(85, 237, 106)',
    // pointBorderColor: '#fff',
    // pointHoverBackgroundColor: '#fff',
    // pointHoverBorderColor: 'rgb(85, 237, 106)'
  }, {
    label: 'Fourteen',
    // on fait appel a la variable défini dans le controller pour chaque responses
    data: [
            {{$quantity_fourteen['1']}},
            {{$quantity_fourteen['2']}},
            {{$quantity_fourteen['3']}},
            {{$quantity_fourteen['4']}},
            {{$quantity_fourteen['5']}}
        ],
    fill: true,
    backgroundColor: 'rgba(255, 25, 41)',
    // borderColor: 'rgb(155, 91, 13)',
    // pointBackgroundColor: 'rgb(189, 112, 17)',
    // pointBorderColor: '#fff',
    // pointHoverBackgroundColor: '#fff',
    // pointHoverBorderColor: 'rgb(189, 112, 17)'
  }, {
    label: 'Fifteen',
    // on fait appel a la variable défini dans le controller pour chaque responses
    data: [
            {{$quantity_fifteen['1']}},
            {{$quantity_fifteen['2']}},
            {{$quantity_fifteen['3']}},
            {{$quantity_fifteen['4']}},
            {{$quantity_fifteen['5']}}
        ],
    fill: true,
    backgroundColor: 'rgba(127, 255, 212)',
    // borderColor: 'rgb(71, 63, 63)',
    // pointBackgroundColor: 'rgb(193, 190, 190)',
    // pointBorderColor: '#fff',
    // pointHoverBackgroundColor: '#fff',
    // pointHoverBorderColor: 'rgb(193, 190, 190)'
  }]
};

const con = {
    type: 'radar',
    data: bas,
    options: {
        elements: {
          line: {
            borderWidth: 3
          }
        }
      },
};
const rad = new Chart(ctx4, con);
</script>
@endsection

