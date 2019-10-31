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
@endsection