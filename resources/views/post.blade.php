@extends('layout')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>Published: {{date('Y-m-d',strtotime($post->published_at))}}</p>
    {{ $post->body }}
    <a href="/">Back</a>
@endsection
