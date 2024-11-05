<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session; 

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all companies from database
        $companies = \App\Models\Company::all()->sortBy('company');
        // dd($companies);  for seeing the companines 

        return view('companies.index')->with('companies', $companies);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //check form submission for errors
        //insert into database or show error
        // dd($request);   data dump
        $rules = [
            'company' => 'required|max:50|unique:companies,company'
        ];

        $validator = $this->validate($request,$rules);

        $company = new \App\Models\Company;
        $company->company = $request->company;
        $company->save();

        //Flash a success messsge
        Session::flash('success','A new company has been created');

        //re-direct to index
        return redirect()->route('companies.index');


        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //retrieve the company corresponding to the passed key value 
        $company = \App\Models\Company::find($id);
        if (!$company){
            //normally we redirect user to the index page

            dd("no company found");
        }

        return view('companies.edit')->with('company',$company);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $rules = [
            'company' => 'required|max:50|unique:companies,company,'.$id 
            // why id added ? look for that 

        ];

        $validator = $this->validate($request,$rules);

        $company = \App\Models\Company::find($id);

        if(!$company) dd("no company found");

        $company->company = $request->company;
        $company->save();

        //Flash a success messsge
        Session::flash('success','A new company has been updated');

        //re-direct to index
        return redirect()->route('companies.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // dd('delete');
        $company = \App\Models\Company::find($id);
        if(!$company){
            dd("no company found");
            Session::flash('error','No company found');
        }else{
            $company->delete();
            Session::flash('success','Company delete');

        }

        return redirect()->route('companies.index');

    }


    public function confirmDelete(string $id){
        
    }
}
