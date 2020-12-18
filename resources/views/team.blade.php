@extends('layouts.app')


@section('title', $team->name)



@section('content')
    <div class="d-flex justify-content-between">
        <div>
            <h1 class="m-5">{{$team->name}}</h1>
            <div class="list-group-item">Name: {{$team->name}}</div>
            <div class="list-group-item">Email: {{$team->email}}</div>
            <div class="list-group-item">Address: {{$team->address}}</div>
            <div class="list-group-item">City: {{$team->city}}</div>
        </div>

                <div>
                    <h2 class="m-5">Players</h2>
                    @foreach($team->players as $player)
                        <div class="list-group-item"><a href="{{route('player', $player)}}">{{$player->first_name}} {{$player->last_name}}</a></div>

                    @endforeach
                </div>
            </div>

    <form class="mt-5" method="POST" action="{{route('comment', ['team' => $team])}}">
        @csrf
        <div class="form-group">
            <label for="content">Comment</label>
            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" placeholder="content" name="content">
            <button type="submit" class="btn btn-primary mt-2">Submit</button>

        </div>
    </form>

    <p class="mt-4">Comments :</p>
    @foreach($team->comments as $comment)
        <p>{{$comment->content}}</p>
    @endforeach
    @include('partials.error-message', ['field' => 'content'])

@endsection
