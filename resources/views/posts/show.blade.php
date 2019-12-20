@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go back</a>
    <h1>{{$post->title}}</h1>
    <h4>
        {!! $post->body !!} {{--pars html to normal text--}}
    </h4>
    <hr>
    <smal>Written on {{$post->created_at}}</smal>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection
