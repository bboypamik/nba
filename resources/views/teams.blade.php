@extends('layouts.app')


@section('title', 'Teams')


@section('content')



    <div class="container">
        <h1 class="m-5">Teams</h1>
        @foreach($teams as $team)
            <a href="#" class="list-group-item">{{$team->name}}</a>
        @endforeach
    </div>

@endsection
