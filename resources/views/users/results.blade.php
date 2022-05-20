@extends('layouts.master')
<section class="p-3 mb-2">
    <div class="col-sm-10 col-sm offset-1 text-center">
           <h6>Vous trouverez ci-dessous les reponses que vous avez apportées a notre sondage le {{$answers[0]->created_at->isoFormat('d-m-Y')}} :</h6>
         @foreach ($answers as $answer)
         <div class="fw-bold">
        <h4>{{ $questions[$answer->question_id-1]->title }}</h4>
         </div>
         <div>
         <h6>{{ $questions[$answer->question_id-1]->body }}</h6>
         </div>
         <div class="border border-success rounded-pill bg-secondary" >
         <h5>{{$answer->answer}}</h5>
         </div>
         @endforeach
     </div>
</section>

<style>
  section{
    background-color: #CCD9E2;
  }
  h6{
    font-family:'Times New Roman', Times, serif;
       color: #4f6457;
  }
  h4{
    color: #856a22;
    font-weight: bold;
    font-family:'Times New Roman', Times, serif
  }
  h5{
    font-family:'Times New Roman', Times, serif;
    font-weight: bold;
    color: #EFEFEF
  }
</style>






