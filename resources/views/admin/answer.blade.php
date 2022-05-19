@extends('layouts.admin')

@section("content")

<div class="questions">
  <table class="table_questions table table-bordered">
    <thead class="thead text-center">
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
    @endforeach
</table>
</div>
@endsection


















