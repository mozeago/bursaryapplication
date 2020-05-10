<?php

namespace App\Http\Controllers;

use App\WardBursaryModel;
use Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
    public function index()
    {
        $user = Auth::user();
        if ($user->isAdmin()) {
            $applicants=DB::table('wardbursaryapplication')->get();
        return view('pages.admin.home')->with("applicants", $applicants);
        }
        return view('pages.user.home');
    }
}
