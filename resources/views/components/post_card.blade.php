

<div class="bg-gray-200 p-6 m-3">
    <a href="/post/{{$post->slug}}">
        <h2>{{$post->title}}</h2>
    </a>
    <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
    <p>{{$post->excerpt}}</p>
    <p style="font-size: .9rem; color: #222">
        Written by: <a href="user/{{$post->author->id}}">{{$post->author->name}}</a>
    </p>
</div>