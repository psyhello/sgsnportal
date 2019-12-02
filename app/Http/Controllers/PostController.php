<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
     	public function index()
  	{
  		$posts = Post::Paginate(3); 
      $lastpost = Post::latest('id')->first();
  		
  		return view ('Posts.index', compact('posts','lastpost'));
  	}

     	public function create()
  	{

  		return view ('Posts.create');
  	}


     	public function store()
  	{
        Post::create($this->validateForm());

        return redirect('/news');
  	}
  	
  	public function show($id)
  	{
      $post = Post::FindOrFail($id);

      $lastpost = Post::latest('id')->first();

  		return view ('Posts.show',compact('post','lastpost'));
  	}
    public function edit($id)
    {
      
     $post = Post::FindOrFail($id);

      return view('Posts.edit',compact('post'));
    }

    public function update($id)
    {

     $post = Post::FindOrFail($id);

     $post->update($this->validateForm());

     return redirect('/news/'. $post->id);

    }

    protected function validateForm()
     {
       return request()->validate(['title'=> 'required','description'=>'required','text'=>'required']);
     }

}
