@extends('layouts.master')

<form method="POST" action="/profile">
    @csrf
    @foreach ($questions as $question)
    <label for="">{{ $question->title }}</label>
    <label for="">{{ $question->body }}</label>
    @if ($question->question_type=='a')
          
    @elseif($question->question_type=='b')
      <div>
            <input type="email">
      </div>    
    @else
    <div>
        <input type="radio" id="contactChoice1"
         name="choice" value="1">
        <label for="contactChoice1">1</label>
    
        <input type="radio" id="contactChoice2"
         name="choice" value="2">
        <label for="contactChoice2">2</label>
    
        <input type="radio" id="contactChoice3"
         name="choice" value="3">
        <label for="contactChoice3">3</label>

        <input type="radio" id="contactChoice3"
         name="choice" value="4">
        <label for="contactChoice4">4</label>

        <input type="radio" id="contactChoice3"
         name="choice" value="5">
        <label for="contactChoice5">5</label>
      </div>
    @endif

    @endforeach

</form>
