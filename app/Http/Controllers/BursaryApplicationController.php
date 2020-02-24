<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BursaryApplicationController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $user = Auth::user();

    //     if ($user->isAdmin()) {
    //         // return view('pages.admin.home');
    //     }

    //     return view('pages.user.home');
    // }
    public function showWardbursary(){
        return view('pages.bursary.wardapplication.wardapplication');
    }
}
