@extends('layouts.master')

@section('title')

@section('content')
    <ul class="list-unstyled">
        <h2>{{$player->first_name . ' ' . $player->last_name}}
        <li>
            <p>{{$player->email}}</p>
            <a href="/teams/{{$player->team_id}}">{{$player->team->name}}</a>
        </li>
    <ul>
@endsection