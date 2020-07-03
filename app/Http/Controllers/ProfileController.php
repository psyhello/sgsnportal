<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Issue;
use Auth;   
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(20);
        $lastpost = Post::latest('id')->first();

        return view('Users.index',compact('users','lastpost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $lastpost = Post::latest('id')->first();

        $user = User::FindOrFail($id);

        

        $issues = $user->issue()->get();

        //dd($issues);
        return view('Users.show',compact('user','lastpost','issues'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lastpost = Post::latest('id')->first();
        $user = User::FindOrFail($id);
        $user->delete();

        return redirect('users');
    }
}
