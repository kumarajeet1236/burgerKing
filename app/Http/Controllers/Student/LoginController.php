<?php

namespace App\Http\Controllers\Student;

use App\User;
use Hash;
use Auth;
use Input;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
   	public function registration (Request $request){
   		if(Auth::check()){
   			return redirect('user/dashboard');
   		}
   		else{
   			if($request->isMethod('post')){
   				$data = $request->except('_token');
			$name = $request->input('name');
			$email = $request->input('email');
			$password = Hash::make($request->input('password'));
			$data=array('name'=>$name,"email"=>$email,"password"=>$password);
			    $D12 = User::where('email', $data['email'])->exists();
					if($D12)
					{
					   echo "Email id already exist" ;
					   die();
					}
				$user = User::create($data);
				if($user){
					return redirect('login')->with('success', 'Record created successfully');
				}else{
						return redirect()->back()->with('success', 'fail to register');
				}		
			}
		}
	}



	public function login(Request $request){  
		if(Auth::check()){
			return redirect('user/dashboard');
		}
		else{
        	if($request->isMethod('post')){
            	$data=$request->except('_token');
                if(Auth()->attempt($data)){
                return redirect('user/dashboard')->with('success','User Login successfully');
                }else{
                return redirect()->back()->with('error',"Invalid email and password combination");
            	}
			    }
		}
   	    return view('Student.login');
    }
        
    

    public function index(Request $request){
    	if(Auth::check()){			
    	return view('Student.index');
		}else{
			return redirect('login');
		}
    }

    public function logout(Request $request){
    	       Auth::logout();
    		return redirect('/login');
    	}

    public function burgerShow(Request $request){
    	if(Auth::check()){
    	return view('Student.burgerShow');
        }else{
        	return redirect('login');
        }
    }
}
