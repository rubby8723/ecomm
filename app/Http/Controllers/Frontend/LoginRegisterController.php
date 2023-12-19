<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\Hash;
use Auth;
class LoginRegisterController extends Controller
{
    public function login(){
        return view('frontend.pages.login.form');
    }
    public function register(){
        return view('frontend.pages.login.registration_form');
    }
    public function store(RegistrationRequest $request)
    {
        $user                = new User();
        $user->first_name    = $request->first_name;
        $user->last_name     = $request->last_name;
        $user->email         = $request->email;
        $user->password      = Hash::make($request->password);
        $user->role_id       = 2;
        $user->save();
        $userDetail          = new UserDetail();
        $userDetail->user_id = $user->id;
        $userDetail->dob     = $request->dob;
        $userDetail->gender  = $request->gender;
        $userDetail->address = $request->address;
        $userDetail->country = $request->country;
        $userDetail->state   = $request->state;
        $userDetail->city    = $request->city;
        $userDetail->save();
        
        $token=$user->createToken('Token')->accessToken;
        return redirect()->route('/')
        ->withSuccess('You have successfully registered & logged in!');
        // return response()->json(['token'=>$token,'user'=>$user],200);
    }

    public function authenticate(Request $request){
        $data=[
        'email'=>$request->email,
         'password'=>$request->password
        ];
        if(auth()->attempt($data)){
            $token = auth()->user()->createToken('Token')->accessToken;
            return redirect()->route('dashboard');
            // return response()->json(['token'=>$token],200);
        }else{
            return response()->json(['error'=>'unauthorized'],401);
        }
        
    }
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}
