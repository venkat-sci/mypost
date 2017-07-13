<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
    //
    public function __construct(){

    }
    // view of the perticluer user
    public function view($id = null){
    	if($id){
    		$user = User::find($id);
    		return view('user.userview',compact('user'));
    	}else{
    		return redirect()->route('posts');
    	}
    }
    public function profile(){

    }
    public function editprofile(){
      $user = User::find(Auth::user());
      return view('user.editprofile',compact('user'));
    }

}
