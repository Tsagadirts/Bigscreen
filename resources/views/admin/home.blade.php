@extends('layouts.admin')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

{{-- le canvas permet l'affichage des graphes --}}
{{-- chaques graphe contient un id différent que l'on va ensuite utiliser pour configiurer le graphe --}}
<div class= "charts d-flex row align-items-center justify-content-center mx-auto">
    <div class ="bg-light d-flex col-5 graph m-1">
        <canvas class ="w-100 m-2" id="chart_six"></canvas>
    </div>
        <div class ="bg-light d-flex col-5 graph m-1">
        <canvas class ="w-100 m-2" id="chart_seven"></canvas>
    </div>
        <div class ="bg-light d-flex col-5 graph m-1">
        <canvas class ="w-100 m-2" id="chart_ten"></canvas>
    </div>
        <div class ="bg-light d-flex col-5 graph m-1">
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
    label: '# Marque de casque',
    backgroundColor: [
    'rgb(255, 99, 132)',
    'rgb(54, 162, 235)',
    'rgb(255, 205, 86)',
    'rgb(255, 25, 41)'
    ],
    // on fait a la variable défini dans le controller pour chaque responses
    data: [
        {{$question_six['Occulus Rift/s']}}, 
        {{$question_six['HTC Vive']}}, 
        {{$question_six['Windows Mixed Reality']}}, 
        {{$question_six['PSVR']}}
    ],
    }] 
};

const config = {
    type: 'pie',
    data: data,
    options: {
        plugins: { 
            title: { 
                display: true,
                text: 'Question Six'
            }
        }  
    },
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
        {{$question_sept['SteamVR']}}, 
        {{$question_sept['Occulus store']}}, 
        {{$question_sept['Viveport']}}, 
        {{$question_sept['Playstation VR']}},
        {{$question_sept['Google Play']}},
        {{$question_sept['Windows store']}}
    ],
    }]
}; 

const confi = {
    type: 'pie',
    data: base,
    options: {
        plugins: { 
            title: { 
                display: true,
                text: 'Question Sept'
            }
        }  
    },
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
        {{$question_dix['regarder des émissions TV en direct']}}, 
        {{$question_dix['regarder des films']}}, 
        {{$question_dix['jouer en solo']}}, 
        {{$question_dix['jouer en team']}}
    ],
    }]
}; 

const conf = {
    type: 'pie',
    data: dat,
    options: {
        plugins: { 
            title: { 
                display: true,
                text: 'Question Dix'
            }
        }  
    },
};
const chart_ten = new Chart(ctx3, conf);


const bas = {
// on store les différents réponses des questions onze a quinze dans un tableau labels
labels: ['1','2','3','4','5'],

  datasets: [{
    label: 'Onze',
    // on fait appel a la variable défini dans le controller pour chaque responses
    data: [
            {{$question_onze['1']}},
            {{$question_onze['2']}},
            {{$question_onze['3']}},
            {{$question_onze['4']}},
            {{$question_onze['5']}}
        ],
    fill: true,
    backgroundColor: 'rgba(0, 255, 87, 0.39)',
    // borderColor: 'rgb(250, 37, 181)',
    // pointBackgroundColor: 'rgb(245, 67, 145)',
    // pointBorderColor: '#fff',
    // pointHoverBackgroundColor: '#fff',
    // pointHoverBorderColor: 'rgb(245, 67, 145)'
  }, {
    label: 'Douze',
    // on fait appel a la variable défini dans le controller pour chaque responses
    data: [
            {{$question_douze['1']}},
            {{$question_douze['2']}},
            {{$question_douze['3']}},
            {{$question_douze['4']}},
            {{$question_douze['5']}}
        ],
    fill: true,
    backgroundColor: 'rgba(7, 0, 255, 0.24)',
    // borderColor: 'rgb(54, 162, 235)',
    // pointBackgroundColor: 'rgb(54, 162, 235)',
    // pointBorderColor: '#fff',
    // pointHoverBackgroundColor: '#fff',
    // pointHoverBorderColor: 'rgb(54, 162, 235)'
  }, {
    label: 'Treize',
    // on fait appel a la variable défini dans le controller pour chaque responses
    data: [
            {{$question_treize['1']}},
            {{$question_treize['2']}},
            {{$question_treize['3']}},
            {{$question_treize['4']}},
            {{$question_treize['5']}}
        ],
    fill: true,
    backgroundColor: 'rgba(255, 194, 0, 0.27)',
    // borderColor: 'rgb(18, 188, 106)',
    // pointBackgroundColor: 'rgb(85, 237, 106)',
    // pointBorderColor: '#fff',
    // pointHoverBackgroundColor: '#fff',
    // pointHoverBorderColor: 'rgb(85, 237, 106)'
  }, {
    label: 'Quatorze',
    // on fait appel a la variable défini dans le controller pour chaque responses
    data: [
            {{$question_quatorze['1']}},
            {{$question_quatorze['2']}},
            {{$question_quatorze['3']}},
            {{$question_quatorze['4']}},
            {{$question_quatorze['5']}}
        ],
    fill: true,
    backgroundColor: 'rgba(255, 124, 0, 0.38)',
    // borderColor: 'rgb(155, 91, 13)',
    // pointBackgroundColor: 'rgb(189, 112, 17)',
    // pointBorderColor: '#fff',
    // pointHoverBackgroundColor: '#fff',
    // pointHoverBorderColor: 'rgb(189, 112, 17)'
  }, {
    label: 'Quinze',
    // on fait appel a la variable défini dans le controller pour chaque responses
    data: [
            {{$question_quinze['1']}},
            {{$question_quinze['2']}},
            {{$question_quinze['3']}},
            {{$question_quinze['4']}},
            {{$question_quinze['5']}}
        ],
    fill: true,
    backgroundColor: 'rgba(255, 0, 0, 0.38)',
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
        plugins: { 
            title: { 
                display: true,
                text: 'Questions Onze à Quinze'
            }
        }  
    },
};
const rad = new Chart(ctx4, con);
</script>
@endsection

