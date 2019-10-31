@extends('layouts.master')

@section('title')

@section('content')

<h2> Register </h2>

<form method="POST" action="/register">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-conf"/>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email"/>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="password">Confirm Password</label>
        <input type="password" id="password" name="password_confirmation" class="form-control"/>
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
        
</form>

@if(count($errors->all()))
    <ul>
        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>
                        {{$error}}
                    </li>
                </div>
            </div>
        @endforeach
    </ul>
@endif


@endsection
