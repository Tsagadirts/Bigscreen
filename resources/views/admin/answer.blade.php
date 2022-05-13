@extends('layouts.admin')

@section("content")

<div class="questions">
  <table class="table_questions table table-bordered">
      <tr>
        <th>Numéro</th>
        <th>Question</th>
        <th>Réponses</th>
      </tr>
    @foreach ($answers as $key => $answer)
     <tr>
      {{-- @if ($key == 20)
      <tr><br></tr>
      @endif --}}
       <td>{{ $questions[$answer->question_id-1]->id }}</td>
       <td>{{ $questions[$answer->question_id-1]->body }}</td>
       <td>{{ $answer->answer }}</td>
     </tr>
    @endforeach
</table>
</div>
@endsection


















