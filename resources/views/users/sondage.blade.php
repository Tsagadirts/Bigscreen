@extends('layouts.master')

<form method="POST" action="/message">
    @csrf
    @foreach ($questions as $question)
    <p class="text-justify" >{{ $question->title }}</p>
     @if ($question->question_type=='a')
      <div>
          <label for="{{ $question->id }}">{{ $question->body }}</label>
          <select name="{{ $question->id }}" id="{{ $question->id }}" class="form-select" aria-label="Floating label select example">
              @foreach($question->options as $option)
              <option value="{{$option}}">
                {{$option}}
              </option>
              @endforeach
          </select>
        </div>
         

         {{-- <p>{{$question->options}}</p> --}}
    
    @elseif($question->question_type=='b')
      <div>
          <label for="{{ $question->id }}">{{ $question->body }}</label>
            <input type="text" name="{{ $question->id }}" id="{{ $question->id }}">
      </div>    
    @else
    <div>
      <p>{{ $question->body }}</p>
      @for ($i = 1; $i<=5; $i++)
        
        <input type="radio" id="{{ $question->id }}"
         name="{{ $question->id }}" value="{{$i}}">
        <label for="{{ $question->id }}">{{$i}}</label>
      @endfor
      
      </div>
    @endif

    @endforeach
    <input type="submit" value="submit">
</form>
