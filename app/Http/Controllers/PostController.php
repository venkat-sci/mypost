<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;

class PostController extends Controller
{
    //
   	public function __construct()
	{
	    $this->middleware('auth');
	}
	public function index(){
		$posts = Post::all();
		return view('posts.posts',compact('posts'));
	}
	public function view(){
    	return view('posts.create_post');		
	}
    public function store(Request $request){

    	$post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user()->associate(Auth::user());
        $post->save();
       
    	return redirect('posts');
    }
}
