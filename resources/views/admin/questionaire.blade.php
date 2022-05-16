@extends('layouts.admin')

@section("content")

<div class="questions">
  <table class="table_questions table table-bordered">
    <thead class="thead text-center bg-secondary">
      <tr>
        <th>Numéros</th>
        <th>Questions</th>
        <th>Types</th>
      </tr>
      </thead>
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




