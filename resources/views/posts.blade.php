<x-layout >
    <x-slot name="content">
        @foreach ($posts as $post)
            <x-post_card :post="$post"></x-post_card>
        @endforeach
    </x-slot>
</x-layout>
