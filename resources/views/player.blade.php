@extends('layouts.app')


@section('title', $player->name)



@section('content')

    <h1>{{$player->first_name}} {{$player->last_name}}</h1>

    <div class="list-group-item">First Name: {{$player->first_name}}</div>
    <div class="list-group-item">Last Name: {{$player->last_name}}</div>
    <div class="list-group-item">e-mail: {{$player->email}}</div>
    <div class="list-group-item">Team: {{$player->team->name}}</div>

@endsection
