<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostColltroller extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'Post in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'Post by ' . $author->name;
        }
        return view('posts', [
            "title" => $title,
            // "posts" => Post::all()
            "posts" => Post::latest()->Filter(request(['search', 'category', 'author']))->paginate(9)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post,
            $itemfavorite = Favorite::all()

        ]);
    }
}
