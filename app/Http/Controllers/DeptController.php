<?php

namespace App\Http\Controllers;

use App\Dept;
use Illuminate\Http\Request;
use App\Company;

class DeptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $Depts = Dept::Paginate(3);

    return view('Depts.index',compact('Depts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = Dept::get()->all();
    return view('Depts.create',compact('parent'));
   

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    Dept::Create($this->valideteForm());

    return redirect('/depts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function show(Dept $dept)
    {

    $cur_dept = Dept::FindOrFail($dept->id);

    return view('Depts.show',compact('cur_dept'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function edit(Dept $dept)
    {

    $cur_dept = Dept::FindOrFail($dept->id);

    return view('Depts.edit',compact('cur_dept'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dept $dept)
    {

    $cur_dept = Dept::FindOrFail($dept->id);

    $cur_dept->update($this->valideteForm());

    return redirect('/dept/'.$cur_dept->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dept $dept)
    {

    $cur_dept = Dept::FindOrFail($dept->id);

    $cur_dept->update($this->valideteForm());

    return redirect('/Dept/'.$dept->id);
    }

       public function valideteForm()
   {

    return request()->validate(['name'=>'required','parentid'=>'required']);

   }
}
