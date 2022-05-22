@extends('layouts.master')
<section id="cover" class="p-3 mb-2">
  
  
    <div id="container">
      <div class="col-sm-10 col-sm offset-1">
        <h1 class="fw-bold">Bigscreen</h1>
        <p class="text-center">Merci de répondre a toutes les questions et de valider le formulaire en  bas de la page</p>
        <form method="POST" action="/message">
          @csrf
          @foreach ($questions as $question)
            <div>
                <p class="text-justify " id="title">{{ $question->title }}</p>
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
                  <input type="text" name="{{ $question->id }}" id="{{ $question->id }}" class="form-control" required>
              </div>    
            @else
              <div>
                <p>{{ $question->body }}</p>
                @for ($i = 1; $i<=5; $i++)
                  <div class="form-check form-check-inline">
                    <input type="radio" id="{{ $question->id }}"
                    name="{{ $question->id }}" value="{{$i}}" required>
                    <label for="{{ $question->id }}">{{$i}}</label>
                  </div>
                @endfor
              </div>
            @endif
          @endforeach
          <br>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-secondary btn-lg">Finaliser</button>
          </div>
        </form>
      </div>
    </div>

  

</section>

<style>
h1{
  font-family:'Times New Roman', Times, serif;
  color: rgb(40, 81, 133);
  
}
p{
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: #4f6457;
  font-weight:bold;
}
#title{
  color: #856a22;
  font-weight: bold
}

section{
  background-color:#CCD9E2
}
select option {
    margin: 40px;
    background: rgba(0, 0, 0, 0.3);
    color: #fff;
    text-shadow: 0 1px 0 rgb(245, 245, 220);
    
}


label{
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: #4f6457;
  font-weight:bold;
}


</style>
