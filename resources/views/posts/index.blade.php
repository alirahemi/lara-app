@extends('layouts/app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="list-group-item">
                <h3><a href="/posts/{{$post->id}}">{{$post->id}} - {{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}} {{--for use paginate in page--}}
    @else
        <p>No Posts found</p>
    @endif
@endsection
