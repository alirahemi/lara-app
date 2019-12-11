@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go back</a>
    <h1>{{$post->title}}</h1>
    <h4>
        {{$post->body}}
    </h4>
    <hr>
    <smal>Written on {{$post->created_at}}</smal>
@endsection
