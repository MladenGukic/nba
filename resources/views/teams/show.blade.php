@extends('layouts.master')

@section('title')

@section('content')
        <ul class="list-unstyled">
            <h3>{{$team->name}}</h3>
            <p>email: {{$team->email}}</p>
            <p>Address: {{$team->address}}</p>
            <p>City: {{$team->city}}</p>
            <h4>Players: </h4>
            @foreach($players as $player)
                <li>
                    <a href="/players/{{$player->id}}"> {{$player->first_name . ' ' . $player->last_name}}</a>
                </li>
            @endforeach
        </ul>
        
        @if(count($team->comments))

            <h3>Comments:</h3>

            <ul class="list-unstyled">

                @foreach($team->comments as $comment)
                    <li>
                        <p>
                            {{$comment->content}}
                        </p>
                    </li>
                @endforeach
            </ul>
        @endif

        <h4>Create comment</h4>
        <form method="POST" action="/teams/{{$team->id}}/comments">
            @csrf
            <div class="form-group">
                <label for="content"> Comment </label>
                <textarea type="text" id="text" name="content" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </form>

    @if (count($errors->all()) > 0)

        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach

    @endif

@endsection