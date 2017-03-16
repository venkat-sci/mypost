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
	  //  $this->middleware('auth');
	}
	public function index(){
		$posts = Post::Paginate(10);
		return view('posts.posts',compact('posts'));
	}
	public function view(){
    	return view('posts.create_post');		
	}
	// show single post
	public function show($id = null){
		if($id){
		$post = Post::find($id);
		return view('posts.singlepost',compact('post'));
		}else{
			return redirect()->route('posts');
		}
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
