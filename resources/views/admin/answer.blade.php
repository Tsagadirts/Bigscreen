@extends('layouts.admin')
<body>
  

@section("content")

<div class="questions">
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
    @endforeach
</table>
</div>
@endsection


















