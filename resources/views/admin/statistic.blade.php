@extends('layouts.master')
@extends('layouts.app')

@section("content")

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">	
	<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>	
	<script type="text/javascript" src="{{asset('assets/js/echarts.min.js')}}"></script>

<body>
  <div class="col-md-12">
    <h1 class="text-center">Bigscreen Chart</h1>
    <div class="col-xl-6" style="margin-top: 30px;">
      <div class="card">
        <div class="card-body">
          <div class="chart-container">
            <div class="chart has-fixed-height" id="pie_basic"></div>
          </div>
        </div>
      </div>
    </div>	
  </div>
  </body>




<script type="text/javascript">
  var pie_basic_element = document.getElementById('pie_basic');
  if (pie_basic_element) {
      var pie_basic = echarts.init(pie_basic_element);
      pie_basic.setOption({               
          
          textStyle: {
              fontFamily: 'Roboto, Arial, Verdana, sans-serif',
              fontSize: 13
          },
  
          title: {
              text: 'Pie Chart Example',
              left: 'center',
              textStyle: {
                  fontSize: 17,
                  fontWeight: 500
              },
              subtextStyle: {
                  fontSize: 12
              }
          },
  
          tooltip: {
              trigger: 'item',
              backgroundColor: 'rgba(0,0,0,0.75)',
              padding: [10, 15],
              textStyle: {
                  fontSize: 13,
                  fontFamily: 'Roboto, sans-serif'
              },
              formatter: "{a} <br/>{b}: {c} ({d}%)"
          },
  
          legend: {
              orient: 'horizontal',
              bottom: '0%',
              left: 'center',                   
              data: ['answer6', 'answer7','answer10'],
              itemHeight: 8,
              itemWidth: 8
          },
  
          series: [{
              name: 'question_id',
              type: 'pie',
              radius: '70%',
              center: ['50%', '50%'],
              itemStyle: {
                  normal: {
                      borderWidth: 1,
                      borderColor: '#fff'
                  }
              },
              data: [
                  {value: {{$answer6_count}}, name: 'answer6'},
                  {value: {{$answer7_count}}, name: 'answer7'},
                  {value: {{$answer10_count}}, name: 'answer10'}
              ]
          }]
      });
  }
  </script>
</div>
@endsection
