<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //    $this->middleware('auth');  // this is comment for testwisae only
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function CreateAccounts()
    {

      $InformationArray=Array(
        "ParentPage"  =>   "Account Management",
        "CurrentPage" =>   "Create New Accounts",
        "FormName"    =>    "Account Information",
      );
      return view('CreateAccounts',$InformationArray);

    }


     public function StoreNewAccounts(Request $Request)
     {

       dd($Request);



     }




}
