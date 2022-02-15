

<div class="mb-14 rounded">
    <a href="/post/{{$post->slug}}" class="text-5xl">
        <h2>{{$post->title}}</h2>
    </a>
    <a href="/categories/{{$post->category->slug}}"><span class="text-teal-300 mr-1">#</span>{{$post->category->name}}</a>
    <p class="text-sm text-teal-300 mb-2">
        Written by: <strong><a href="user/{{$post->author->id}}">{{$post->author->name}}</a></strong> - {{$post->created_at->diffForHumans()}}
    </p>
    <p>{{$post->body}}</p>
</div>