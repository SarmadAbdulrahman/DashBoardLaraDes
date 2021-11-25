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

  // dd($Request);
       $validated = $Request->validate([
         'Username' => ['required', 'string', 'max:255'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         'mobile' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         'Shope_Name' => ['required', 'string', 'max:255'],
         'Shope_Type' => ['required', 'string', 'max:255'],
         'Name' => ['required', 'string', 'max:255'],
         'Family' => ['required', 'string', 'max:255'],
         'Phone_2' => ['required', 'string', 'max:255'],
   ]);


       dd($Request);



     }




}
