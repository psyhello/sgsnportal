<?php

namespace App\Http\Controllers;

use App\Issue;
use Illuminate\Http\Request;
use App\Post;
use DB;
use Auth;
use Storage;

class IssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lastpost = Post::latest('id')->first();
        $issues = Issue::Paginate(5);
        return view('Issues.index',compact('issues','lastpost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            return view('Issues.create');
        }
        else{
            return view('auth.login');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::id();

        $issue = Issue::create($this->validateForm(),$user);

        $ext = $request->file('image')->extension();

        if ($request->file('image')) {
                $request->file('image')->storeAs('public',$issue->id.'.'.$ext);
            }

        return redirect('/issues');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
        $lastpost = Post::latest('id')->first();


       
        
        $issue = Issue::FindOrFail($issue)->first();

        $file = glob($_SERVER['DOCUMENT_ROOT'].'storage/'. $issue->id .'.*');

   

        return view('Issues.show',compact('issue','lastpost','file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        $issue = Issue::FindOrFail($issue)->first();

        return view('Issues.edit',compact('issue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
    {
        $issue= Issue::FindOrFail($issue)->first();

        $issue->update($this->validateForm());

        return redirect('/issues/'. $issue->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        //
    }
     /**
     * Validates form for Issue
     *
     * @param  Form request
     * @return \Illuminate\Http\Response
     */

    protected function validateForm()
     {
       return request()->validate(['description'=>'required','user_id'=>'required']);
     }

     public function finish(Request $request, Issue $issue)
     {
         $curIs= Issue::FindOrFail($issue)->first();

        $curId = $curIs->id;

         $fin = DB::table('issues')->where('id',$curId)->update(['state' => 1]);

         return redirect('/issues');

     }
}
