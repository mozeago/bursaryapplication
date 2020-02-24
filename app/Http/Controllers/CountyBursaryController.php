<?php

namespace App\Http\Controllers;

use App\CountyBursaryModel;
use Illuminate\Http\Request;

class CountyBursaryController extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePersonalInformation(Request $request)
    {
        CountyBursaryModel::updateOrCreate(['user_id'=>$request->user_id],[
        'user_id'=>$request->user_id,
        'first_name'=>$request->first_name,
        'middle_name'=>$request->middle_name,
        'family_name'=>$request->family_name,
        'email_address'=>$request->email_address,
        'identifidation_number'=>$request->identifidation_number,]);
        return redirect()->back()->with('success','succesfully saved data !');
    }
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSchoolInformation(Request $request)
    {
        CountyBursaryModel::updateOrCreate(['user_id'=>$request->user_id],[
        'user_id'=>$request->user_id,   
        'schoolname'=>$request->schoolname,
        'schoolcategory'=>$request->schoolcategory,
        'admissionnumber'=>$request->admissionnumber,
        'joineddate'=>$request->joineddate,
        'yearofadmission'=>$request->yearofadmission,
        'durationofstudy'=>$request->durationofstudy,
        'coursename'=>$request->coursename,]);
        return redirect()->back()->with('success','succesfully saved data !');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBursaryInformation(Request $request)
    {
        CountyBursaryModel::updateOrCreate(['user_id'=>$request->user_id],[
        'user_id'=>$request->user_id,   
        'feesbalance'=>$request->feesbalance,
        'feesattachmentpath'=>$request->feesattachmentpath,
        'admissionletterpath'=>$request->admissionletterpath,
        'latestresultspath'=>$request->latestresultspath,]);
        return redirect()->back()->with('success','succesfully saved data !');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
