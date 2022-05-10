@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <nav class="nav_bar">
                        <a href="{{ route("statistic") }}">
                            <span>Accueil</span>
                        </a> 
                        <a href="{{ route("form") }}">
                            <span>Questions</span>
                        </a>
                        <a href="{{ route("answer") }}">
                            <span>Réponses</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
