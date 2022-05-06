@extends('layouts.master')
<p>vous trouverez ci-dessous les reponsesque vous avez apportées a notre sondage le {{$answers[0]->created_at->isoFormat('DD.mm.YYYY à HH.mm')}} :</p>
@foreach ($answers as $answer)
    <div>
        {{ $questions[$answer->question_id-1]->title }}
    </div>
    <div>
        {{ $questions[$answer->question_id-1]->body }}
    </div>
    <div>
        {{$answer->answer}}
    </div>
@endforeach



