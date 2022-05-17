@extends('layouts.master')
<section id="cover" class="p-3 mb-2 bg-secondary text-white">
  
  
    <div id="container">
      <div class="col-sm-10 col-sm offset-1">
        <h1 class="fw-bold">Bigscreen</h1>
<<<<<<< HEAD
         <p class="text-center">Merci de répondre a toutes les questions et de valider le formulaire en  bas de la page</p>
         <form method="POST" action="/message">
    @csrf
    @foreach ($questions as $question)
    <div>
        <p class="text-justify">{{ $question->title }}</p>
    </div>
     @if ($question->question_type=='a')
      <div>
          <label for="{{ $question->id }}" placeholder="Default input">{{ $question->body }}</label>
          <select name="{{ $question->id }}" id="{{ $question->id }}" class="form-select " aria-label="Floating label select example">
              @foreach($question->options as $option)
              <option value="{{$option}}">
                {{$option}}
              </option>
              @endforeach
          </select>
        </div>    
    @elseif($question->question_type=='b')
      <div>
          <label for="{{ $question->id }}" class="form-label">{{ $question->body }}</label>
          <input type="text" name="{{ $question->id }}" id="{{ $question->id }}" class="form-control">
      </div>    
    @else
    <div>
      <p>{{ $question->body }}</p>
      @for ($i = 1; $i<=5; $i++)
        <div class="form-check form-check-inline">
        <label for="{{ $question->id }}">{{$i}}</label>
        <input type="radio" id="{{ $question->id }}"
         name="{{ $question->id }}" value="{{$i}}">
=======
        <p class="text-center">Merci de répondre a toutes les questions et de valider le formulaire en  bas de la page</p>
        <form method="POST" action="/message">
          @csrf
          @foreach ($questions as $question)
            <div>
                <p class="text-justify">{{ $question->title }}</p>
            </div>
            @if ($question->question_type=='a')
              <div>
                  <label for="{{ $question->id }}" placeholder="Default input">{{ $question->body }}</label>
                  <select name="{{ $question->id }}" id="{{ $question->id }}" class="form-select " aria-label="Floating label select example">
                      @foreach($question->options as $option)
                      <option value="{{$option}}">
                        {{$option}}
                      </option>
                      @endforeach
                  </select>
              </div>       
            @elseif($question->question_type=='b')
              <div>
                  <label for="{{ $question->id }}" class="form-label">{{ $question->body }}</label>
                  <input type="text" name="{{ $question->id }}" id="{{ $question->id }}" class="form-control">
              </div>    
            @else
              <div>
                <p>{{ $question->body }}</p>
                @for ($i = 1; $i<=5; $i++)
                  <div class="form-check form-check-inline">
                    <input type="radio" id="{{ $question->id }}"
                    name="{{ $question->id }}" value="{{$i}}">
                    <label for="{{ $question->id }}">{{$i}}</label>
                  </div>
                @endfor
              </div>
            @endif
          @endforeach
          <br>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-light btn-lg btn-block">Finaliser</button>
          </div>
        </form>
>>>>>>> 2fe89d7d0903968cbc82e48baef46abfdb2e66fd
      </div>
    </div>
  

</section>
