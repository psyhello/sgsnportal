<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::Paginate(3); 
      $lastpost = Post::latest('id')->first();
      
      return view ('Posts.index', compact('posts','lastpost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Post::create($this->validateForm());

        return redirect('/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::FindOrFail($id);

      $lastpost = Post::latest('id')->first();

      return view ('Posts.show',compact('post','lastpost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::FindOrFail($id);

      return view('Posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Post  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
    $post = Post::FindOrFail($id);

     $post->update($this->validateForm());

     return redirect('/news/'. $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::FindOrFail($id);

        $post->delete();

        return redirect('/news');
    }
        /**
     * Validates the data from requested form.
     *
     * @return  attributes for update() or create()
     */
    protected function validateForm()
     {
       return request()->validate(['title'=> 'required','description'=>'required','text'=>'required']);
     }

}
