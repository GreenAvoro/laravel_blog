<x-layout>
    <x-slot name="content">
        <a href="/" class="bg-teal-300 text-white rounded py-1.5 px-4 inline-block mb-4">Back</a>
        
        <h1 class="text-6xl">{{$post->title}}</h1>
        <br>
        <p class="text-teal-300">{{date('Y / m / d',strtotime($post->created_at))}}</p>
        <p class="text-teal-300">{{ $post->author->name}}</p>
        <br>
        <p>{{ $post->body }}</p>
    </x-slot>
</x-layout>