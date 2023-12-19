<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
      $user=User::create([
        // 'first_name'=>'abc',
        'email'=>$request->email,
        'password'=>Hash::make($request->password)
      ]);

      $token=$user->createToken('Token')->accessToken;
      return response()->json(['token'=>$token,'user'=>$user],200);
    }
    public function logins(Request $request){


        $data=[
        'email'=>$request->email,
         'password'=>$request->password
        ];
      
      // dd(auth()->attempt($data));
        if(auth()->attempt($data)){
            $token = auth()->user()->createToken('Token')->accessToken;
            return response()->json(['token'=>$token],200);
        }else{
            return response()->json(['error'=>'unauthorized'],401);
        }
        
    }
    public function userInfo(){
      $user=auth()->user();
      return response()->json(['user'=>$user],401);

    }
}