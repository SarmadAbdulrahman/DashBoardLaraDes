<?php

namespace App\Http\Controllers\Mobile\CookerModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class CookerMainController extends Controller
{
    //
    public function Login(Request $Request)
    {


        $validation = Validator::make($Request->all(),[
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validation->fails()){

            return response(['data'=>$validation->errors()],401);
        }else{


            $credentials = request(['email', 'password']);
           // dd($credentials);

            if (! $token = auth('api')->attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            return response()->json(['token' => $token]);
      //  }

        }

    }
}
