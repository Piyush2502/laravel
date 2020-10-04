<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ATGController extends Controller
{
    public function index(){
    	return view('form');
    }
    public function save(Request $request){
        
    	$data=$request->all();
    		 // echo "<pre>";print_r($data);
    		 // die();


    	$this->validate($request,[   
               "name"=>"required",
               "email"=>"required|max:30|min:8|email|unique:Users",
               "pincode"=>"required|max:6|min:6"]);

    	$usercount=User::where('email',$data['email'])->count();
    		if($usercount>0){
    			return redirect()->back()->with('message','Email is already existed');
    		}

            else{
                $user=new User;
    			$user->name=$data['name'];
    			$user->email=$data['email'];
    			$user->pincode=$data['pincode'];
                $user->save();
                return redirect('/')->with('message',"Form successfully submitted!!");
    		     }


    }
}
