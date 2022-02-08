
@extends('layout')

@section('content')
    <h1>The Blog</h1>
    <p>I've added this subtitle to test the auto-deploy functionality of Forge. Wow. Forge worth it.</p>
    <hr>
    @foreach ($posts as $post)
        <p>
            <a href="/post/{{$post->id}}">{{$post->title}}</a>
        </p>
    @endforeach
@endsection
