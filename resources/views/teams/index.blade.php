@extends('layouts.master')

@section('title')

@section('content')
    
    <h2> All teams: </h2>
    <ul>
        @foreach($teams as $team)
            <li>
                <a href="/teams/{{$team->id}}">{{$team->name}}</a>
            </li>
        @endforeach
    </ul>

@endsection