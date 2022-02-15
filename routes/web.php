<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('posts', [
        'posts' => Post::latest('published_at')->with('category')->get()
    ]);
});

Route::get('post/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function(Category $category){
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('user/{user}', function(User $user){
    return view('posts', [
        'posts' => $user->posts
    ]);
});