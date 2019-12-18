<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
   public function index()
   {

   	$companies = Company::Paginate(3);

   	return view('Companies.index',compact('companies'));

   }

   public function show(Company $Company)
   {

   	$comp_id = Company::FindOrFail($Company->id);

   	return view('Companies.show',compact('comp_id'));

   }

   public function create()
   {

   	return view('Companies.create');
   
   }

   public function store(Request $Request)
   {
   	Company::Create($this->valideteForm());

   	return redirect('/company');
   }

   public function edit(Company $Company)
   {
   	
   	$comp = Company::FindOrFail($Company->id);

   	return view('Companies.edit',compact('comp'));

   }


   public function update(Request $Request, Company $Company)
   {

   	$comp = Company::FindOrFail($Company->id);

   	$comp->update($this->valideteForm());

   	return redirect('/company/'.$Company->id);

   }

   public function valideteForm()
   {

   	return request()->validate(['name'=>'required']);

   }

}
