<x-layout>
    <x-slot name="content">
        <h1>Schedule</h1>
        @foreach ($schedule as $item)
            <p>{{ $item->title }}</p>
        @endforeach
    </x-slot>

</x-layout>