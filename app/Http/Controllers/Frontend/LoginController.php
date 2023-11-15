<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function login(){
        return view('frontend.pages.login.form');
    }
    public function registeration(){
        return view('frontend.pages.login.registration_form');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // $user=User::create([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'password'=>Hash::make($request->password)
        //   ]);
    
        //   $token=$user->createToken('Token')->accessToken;
        //   return response()->json(['token'=>$token,'user'=>$user],200);
        $user = new User();
        $user->first_name  =  $request->first_name;
        $user->last_name  =  $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 2;
        $user->save();
        $userDetail = new UserDetail();
        $userDetail->dob = $request->dob;
        $userDetail->gender = $request->gender;
        $userDetail->address = $request->address;
        $userDetail->country = $request->country;
        $userDetail->state = $request->state;
        $userDetail->city = $request->city;
        $userDetail->save();
        return redirect()->back();
    }
}
