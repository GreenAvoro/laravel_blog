<x-layout>
    <x-slot name="content">
        <h1>{{$post->title}}</h1>
        <p>Published: {{date('Y-m-d',strtotime($post->published_at))}}</p>
        <p>{{ $post->body }}</p>
        <a href="/">Back</a>
    </x-slot>
</x-layout>