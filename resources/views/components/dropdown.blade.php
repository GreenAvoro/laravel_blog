<div>
    Filter
    <div x-data="{ show: false}" class="inline-block p-2 bg-teal-300 rounded">
        <button @click="show=!show">Categories</button>
        <div x-show="show" style="display: none">
            @foreach ($categories as $category)
                <x-dropdown-buttton></x-dropdown-buttton>
            @endforeach
            
        </div>
    </div>
</div>