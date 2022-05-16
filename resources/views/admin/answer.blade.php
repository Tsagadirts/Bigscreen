@extends('layouts.admin')

@section("content")

<div class="questions">
  <table class="table_questions table table-bordered">
    <thead class="thead text-center bg-secondary">
      <tr >
        <th>Numéros</th>
        <th>Questions</th>
        <th>Réponses</th>
      </tr>
    </thead>
      @foreach ($answers as $answer)
    {{-- <thead class="thead-dark"> --}}
      <tr>
       <td >{{ $questions[$answer->question_id-1]->id }}</td>
       <td>{{ $questions[$answer->question_id-1]->body }}</td>
       <td>{{ $answer->answer }}</td>
       {{-- {{ $questions[$answer->question_id-1]->id % 20 ? null: '<br>'}} --}}
      </tr>
    {{-- </thead> --}}
    @endforeach
</table>
</div>
@endsection


















