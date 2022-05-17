@extends('layouts.admin')

@section("content")

<div class="questions">
<<<<<<< HEAD
  <table class="table_questions table table-bordered">
    <thead class="thead text-center bg-secondary">
      <tr >
        <th>Numéros</th>
        <th>Questions</th>
        <th>Réponses</th>
      </tr>
    </thead>
    {{-- la boucle affichera les questions et les réponses des utilisateurs pour la parti admin --}}
      @foreach ($answers as $answer)
      <tr>
        {{-- on recupère l'id de la questions --}}
       <td >{{ $questions[$answer->question_id-1]->id }}</td>
        {{-- on recupère la questions --}}
       <td>{{ $questions[$answer->question_id-1]->body }}</td>
        {{-- on recupère les réponses de chaque questions --}}
       <td>{{ $answer->answer }}</td>
      </tr>
      {{-- if est un separateur après les vignt questions il crée un espace dans le tableau --}}
      @if ($questions[$answer->question_id-1]->id % 20 == 0)
        <tr class="separator">
          <td colspan="3"></td>
        </tr>
      @endif
=======
  <table class="table_questions">
    <thead class="thead-dark">
      <tr>
        <th >Numéro</th>
        <th >Question</th>
        <th >Type</th>
      </tr>
    @foreach ($answers as $answer)
   </thead>
   <tbody >
     <tr>
       {{-- -1 = 0 qui est le debut du tableau --}}
       <td class="text-danger">{{ $questions[$answer->question_id-1]->id }}</</td>
       <td >{{ $questions[$answer->question_id-1]->body }}</</td>
       <td>{{ $answer->answer }}</</td>
     </tr>
>>>>>>> 2fe89d7d0903968cbc82e48baef46abfdb2e66fd
    @endforeach
</table>
</div>
@endsection


















