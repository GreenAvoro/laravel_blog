
@extends('layout')

@section('content')
    <h1>The blog</h1>
    <hr>
    @foreach ($posts as $post)
        <p>
            <a href="/post/{{$post->id}}">{{$post->title}}</a>
        </p>
    @endforeach
@endsection
