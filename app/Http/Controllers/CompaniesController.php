<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="New Company Registraion";
        return view('add_new_company')->with(compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'val-companyname'=>'required',
            'val-email'=>'required|email|unique:companies,com_email,except,com_id',
            // 'logo'=>'dimensions:width=100,height=100',
            'url'=>'required|url'
        ]);
        // return $request;
        $companies=new Companies;
        $companies->com_Name=$request->input('val-companyname');
        $companies->com_email=$request->input('val-email');
        $img = "";
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $teaser_image = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/companies');
            $file->move($destinationPath, $teaser_image);
            $img = $teaser_image;
        }
        $companies->com_logo=$img;
        $companies->com_website=$request->input('url');
        $companies->save();
        return redirect()->route('company.show','company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show(Companies $companies)
    {
        $companies=Companies::paginate(100);
        $title="All Companies";
        return view('companies_table')->with(compact('companies','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit(Companies $companies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companies $companies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companies $companies)
    {
        //
    }
}
