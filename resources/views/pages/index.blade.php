@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-3">{{$title}}</h1>
        <p class="lead">This is Laravel Application from the Youtube Series</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection
