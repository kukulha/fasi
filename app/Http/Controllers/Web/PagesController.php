<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PagesController extends Controller
{
    public function index()
    {
    	$posts = Post::orderBy('id', 'DESC')->paginate(3);
    	return view('index', compact('posts'));
    }

    public function blog(Request $request)
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(6);
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('web.posts', compact('posts', 'categories'));
    }

    public function category(Request $request , $slug)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('category_id', $category)
            ->orderBy('id', 'DESC')
            ->paginate(6);
        
        return view('web.posts', compact('posts', 'categories'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $related = Post::where('category_id', '=', $post->category->id)
            ->where('id', '!=', $post->id)
            ->paginate(3);
        return view('web.post', compact('post', 'related'));
    }
}
