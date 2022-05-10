@extends('layouts.master')

@section("content")

<div class="questions">
  <table class="table_questions">
    <thead>
      {{-- <tr>
        <th>Numéro</th>
        <th>Question</th>
        <th>Type</th>
      </tr> --}}
   </thead>
   {{-- @foreach ($surveyeds as $surveyed) --}}
    @foreach ($surveyed->answers as $answer)
   <tbody>
     <tr>
       {{-- -1 = 0 qui est le debut du tableau --}}
       {{-- <td>{{ [$answer->question_id-1] }}</td>
       <td>{{ [$answer->question_id-1]->body }}</td>
       <td>{{ [$answer->answer] }}</td> --}}
       <td>{{ $questions[$answer->question_id-1]->id }}</</td>
       <td>{{ $questions[$answer->question_id-1]->body }}</</td>
       <td>{{ $answer->answer }}</</td>
     </tr>
    </tbody>
    @endforeach
    {{-- @endforeach --}}
  {{-- </thead> --}}
</table>
</div>
@endsection