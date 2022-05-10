@extends('layouts.admin')

@section("content")

<div class="questions">
  <table class="table_questions">
    <thead>
      <tr>
        <th>Numéro</th>
        <th>Question</th>
        <th>Réponses</th>
      </tr>
   </thead>
    @foreach ($answers as $answer)
   <tbody>
     <tr>
       <td>{{ $questions[$answer->question_id-1]->id }}</</td>
       <td>{{ $questions[$answer->question_id-1]->body }}</</td>
       <td>{{ $answer->answer }}</</td>
     </tr>
    </tbody>
    @endforeach
  {{-- </thead> --}}
</table>
</div>
@endsection
