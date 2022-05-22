@extends('layouts.admin')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

{{-- le canvas permet l'affichage des graphes --}}
{{-- chaques graphe contient un id différent que l'on va ensuite utiliser pour configiurer le graphe --}}
<div class= "charts">
    <div class ="bg-light d-flex col-12 col-md-6 graph">
        <canvas class ="w-100 m-2" id="chart_six"></canvas>
    </div>
        <div class ="bg-light d-flex col-12 col-md-6 graph">
        <canvas class ="w-100 m-2" id="chart_seven"></canvas>
    </div>
        <div class ="bg-light d-flex col-12 col-md-6 graph">
        <canvas class ="w-100 m-2" id="chart_ten"></canvas>
    </div>
        <div class ="bg-light d-flex col-12 col-md-6 graph">
        <canvas class ="w-100 m-2" id="radar"></canvas>
    </div>
</div>

    
<script>

// on passe le même id dans des constante que dans le canvas
const ctx = document.getElementById('chart_six');
const ctx2 = document.getElementById('chart_seven');
const ctx3 = document.getElementById('chart_ten');
const ctx4 = document.getElementById('radar');

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
    backgroundColor: [
    'rgb(86, 130, 3)',
    'rgb(1, 121, 111)',
    'rgb(222, 49, 99)',
    'rgb(255, 203, 96)'
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
    backgroundColor: [
    'rgb(86, 130, 3)',
    'rgb(1, 121, 111)',
    'rgb(222, 49, 99)',
    'rgb(255, 203, 96)',
    'rgb(112, 41, 99)',
    'rgb(150, 131, 236)'

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
    backgroundColor: [
    'rgb(86, 130, 3)',
    'rgb(1, 121, 111)',
    'rgb(222, 49, 99)',
    'rgb(255, 203, 96)'
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
    backgroundColor: 'rgba(0, 255, 87, 0.39)'
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
    backgroundColor: 'rgba(7, 0, 255, 0.24)'
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
    backgroundColor: 'rgba(255, 194, 0, 0.27)'
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
    backgroundColor: 'rgba(143, 73, 0, 0.24)'
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
    backgroundColor: 'rgba(255, 0, 0, 0.38)'
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
const radar = new Chart(ctx4, con);
</script>
@endsection

