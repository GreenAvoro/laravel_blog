<x-layout >
    <x-slot name="content">
        @foreach ($posts as $post)
            <x-post_card :post="$post" />
        @endforeach
    </x-slot>
</x-layout>
