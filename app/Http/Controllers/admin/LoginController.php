<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth,Session,Hash;
use App\Admin;
use redirect;

class LoginController extends Controller
{


    
    public function getLogin(Request $request){
        if(Auth::check()){
            return redirect('user/dashboard');
        }
        else{
            if($request->isMethod('post')){
                $data=$request->except('_token');
                if(Auth::guard('admins')->attempt($data)){
                return redirect('admin/dashboard')->with('success','User Login successfully');
                }else{
                return redirect()->back()->with('error',"Invalid email and password combination");
                }
            }
        }
    }
     
    public function index(Request $request){
        return view('Admin.dashboard');
    }
}
