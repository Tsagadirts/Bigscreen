@extends('layouts.master')
<section class="p-3 mb-2 bg-secondary text-white">
    <div class="col-sm-10 col-sm offset-1 text-center">
           <h6>Vous trouverez ci-dessous les reponsesque vous avez apportées a notre sondage le {{$answers[0]->created_at->isoFormat('DD.mm.YYYY à HH.mm')}} :</h6>
         @foreach ($answers as $answer)
         <div class="fw-bold">
        <h4>{{ $questions[$answer->question_id-1]->title }}</h4>
         </div>
         <div>
         <h6>{{ $questions[$answer->question_id-1]->body }}</h6>
         </div>
         <div>
        <h5 class="text-info bg-dark">{{$answer->answer}}</h5>
         </div>
         @endforeach
     </div>
</section>



