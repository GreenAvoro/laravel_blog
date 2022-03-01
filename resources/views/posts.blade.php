<x-layout >
    <x-slot name="content">
        <div class="flex justify-between items-center">
            @if($type == 'category')
                <h1 class="text-2xl mb-5"><span class="text-teal-300 mr-1">/</span><?= ucwords($category->name)?></h1>
            @elseif( $type == 'user')
                <h1 class="text-2xl mb-5"><span class="text-teal-300 mr-1">/</span>User</h1>
            @else
                <h1 class="text-2xl mb-5"><span class="text-teal-300 mr-1">/</span>News</h1>
            @endif
            
        </div>
        @foreach ($posts as $post)
            <x-post_card :post="$post" />
        @endforeach
    </x-slot>
</x-layout>
