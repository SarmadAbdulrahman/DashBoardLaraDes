<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;




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


    // CreateLead
    public function CreateAccounts()
    {


    //  $path = public_path('test');
    // $files = File::allFiles($path);



      // return mime type ala mimetype extension

      $InformationArray=Array(
        "ParentPage"  =>   "Account Management",
        "CurrentPage" =>   "Create New Accounts",
        "FormName"    =>    "Account Information",
      );
      return view('CreateAccounts',$InformationArray);

    }


     public function StoreNewAccounts(Request $Request)
     {

       $validated = $Request->validate([
         'Username' => ['required', 'string', 'max:255'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         'mobile' => ['required', 'string', 'max:255', 'unique:users'],
         'Shope_Name' => ['required', 'string', 'max:255'],
         'Shope_Type' => ['required', 'string', 'max:255'],
         'Name' => ['required', 'string', 'max:255'],
         'Family' => ['required', 'string', 'max:255'],
         'Phone_2' => ['required', 'string', 'max:255'],
   ]);


   $user=User::create([
       'name' => $Request['Username'],
       'email' => $Request['email'],
        'mobile' => $Request['mobile'],
       'password' => Hash::make($Request['password'])
     ]);



      Cocker::create([
        "Shope_Name"=>$Request->Shope_Name,
        "Shope_Type"=>$Request->Shope_Type,
        "user_id"   =>$user->id
      ]);




      return redirect()->back()->with('success','Shop successfully added.');

     }



    // CreateLead
    public function CreateLead()
    {
        $InformationArray=Array(
            "ParentPage"  =>   "Account Management",
            "CurrentPage" =>   "Create New Lead",
            "FormName"    =>    "Lead Information",
        );
        return view('CreateLead',$InformationArray);

    }



    public function StoreNewLeads(Request $Request)
    {

        $validated = $Request->validate([
            'Username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required', 'string', 'max:255', 'unique:users'],
            'Shope_Name' => ['required', 'string', 'max:255'],
            'Shope_Type' => ['required', 'string', 'max:255'],
            'Name' => ['required', 'string', 'max:255'],
            'Family' => ['required', 'string', 'max:255'],
            'Phone_2' => ['required', 'string', 'max:255'],
        ]);


      



        return redirect()->back()->with('success','Shop successfully added.');

    }

}
