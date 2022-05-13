@extends('layouts.admin')

@section("content")

<div class="questions">
  <table class="table_questions table table-bordered">
      <tr>
        <th>Numéro</th>
        <th>Question</th>
        <th>Type</th>
      </tr>
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




