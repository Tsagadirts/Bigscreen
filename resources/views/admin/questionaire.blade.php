@extends('layouts.admin')

@section("content")

<div class="questions">
  <table class="table_questions table table-bordered">
    <thead class="thead text-center">
      <tr>
        <th>Numéros</th>
        <th>Questions</th>
        <th>Types</th>
      </tr>
      </thead>
      {{-- afficher l'id des questions et leurs types avec le foreach dans une table --}}
   @foreach ($questions as $question)
     <tr>
       <td>{{ $question->id }}</</td>
       <td>{{ $question->body }}</</td>
       <td>{{ $question->question_type }}</</td>
     </tr>
    @endforeach
</table>
</div>
@endsection




