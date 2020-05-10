<?php

namespace App\Http\Controllers;

use App\WardBursaryModel;
use Illuminate\Http\Request;

class WardBursaryController extends Controller
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
        WardBursaryModel::updateOrCreate(['user_id'=>$request->user_id],[
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
        WardBursaryModel::updateOrCreate(['user_id'=>$request->user_id],[
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
        $storagefeespath="uploads/fees/ward/";
        $storageresultspath="uploads/results/ward/";
        $storageletterpath="uploads/admissionletters/ward/";
        /**fees */
        $feesfiles=$request->file('feesattachmentpath');
        $feesfileextension=$feesfiles->getClientOriginalExtension();
        $feesnewname=$request->user_id."_fees.".$feesfileextension;
        $feesfiles->move($storagefeespath,$feesnewname);
        /**
         * end 
         * fees
         */
        $admissionletterfiles=$request->file('admissionletterpath');
        $admissionletterfileextension=$admissionletterfiles->getClientOriginalExtension();
        $admissionletternewname=$request->user_id."_admission_letter.".$admissionletterfileextension;
        $admissionletterfiles->move($storageletterpath,$admissionletternewname);
        /**
         * end admission letter
         *
         */
        $resultsfiles=$request->file('latestresultspath');
        $resultsfileextension=$resultsfiles->getClientOriginalExtension();
        $resultsnewname=$request->user_id."_latestresults.".$resultsfileextension;
        $resultsfiles->move($storageresultspath,$resultsnewname);
        /**
         * end results
         */
        WardBursaryModel::updateOrCreate(['user_id'=>$request->user_id],[
        'user_id'=>$request->user_id,   
        'feesbalance'=>$request->feesbalance,
        'feesattachmentpath'=>$feesnewname,
        'admissionletterpath'=>$admissionletternewname,
        'latestresultspath'=>$resultsnewname,]);
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
