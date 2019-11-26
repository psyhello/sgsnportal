<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
     	public function index()
  	{
  		$posts = Post::Paginate(3); 

  		
  		return view ('Posts.index', compact('posts'));
  	}

     	public function create()
  	{

  		
  		return view ('Posts.create');
  	}

     	public function store()
  	{
  		return Request()->all();
  	}


  	
  	public function show($id)
  	{
  		$post = Post::find($id);

  		return view ('Posts.show',compact('post'));
  	}
}
