<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index()
    {
    	$posts = Post::orderBy('id', 'DESC')->paginate(3);
    	return view('index', compact('posts'));
    }

    public function post($slug)
   	{
   		$post = Post::where('slug', $slug)->first();
   		return view('web.post', compact('post'));
   	} 
}
