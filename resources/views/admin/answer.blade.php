@extends('layouts.admin')

@section("content")

<div class="questions">
  <table class="table_questions">
      <tr>
        <th>Numéro</th>
        <th>Question</th>
        <th>Réponses</th>
      </tr>
    @foreach ($answers as $answer)
     <tr>
       <td>{{ $questions[$answer->question_id-1]->id }}</td>
       <td class="quest">{{ $questions[$answer->question_id-1]->body }}</td>
       <td>{{ $answer->answer }}</td>
     </tr>
    @endforeach
</table>
</div>
@endsection


















