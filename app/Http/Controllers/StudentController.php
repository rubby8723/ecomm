<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Studentrequest;
use App\Models\Userimage;
use App\Models\Student;
use App\Models\User;
use App\Events\Order;
use App\Listeners\Updateorder;
use Exception;
class StudentController extends Controller
{
    
    public function index(){
      
       $users =  User::first();
       event(new Order($users));
       dd(new Updateorder)->handle($users);       
    }
    function submit_form(Request $req){
       // if(empty($student->name)){
            //     throw new Exception("please eneter name");
            // }
        try{
       // $req->Validated();   
        $student=new Student;
        $student->name= $req->name;
        $student->city= $req->city;
        $student->gender= $req->gender;
        $student->hobbies= $req->hobbies;
        $student->save();
        
        if($req->has('images')) {
            $userImg=new Userimage;
            $userImg->images = $req->images;  
            $userImg->user_id = $req->student_id;
            $userImg->save();
        }
       

           
        }catch(Exception $exception){
            dd($exception->getmessage());
            return view('users');
        }
        Order::dispatch($student);
        //event(new Order($student));

        
    }
    function edit($id){
        echo yrtyry("helper");
        return Student::find($id);
       
    }
    
}
