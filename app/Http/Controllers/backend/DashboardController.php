<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function dashboard(){
        return view ('backend.master');
    }

    public function dashboardView(){
        return view ('backend.pages.body');
    }
    public function login()
    {
        return view('backend.pages.login');
    }

    public function dologin(Request $request){
        
        $validate=Validator::make($request->all(),[
        'email'=>'required',
        'password'=>'required|min:5'
        ]);
        
        if($validate->fails())
        {
            return redirect()->back();
        }
        $credentials=$request->only(['email','password']);
        // dd($credentials);
        if(auth()->attempt($credentials)){
            
            return redirect()->route('home');
        }
        return redirect()->back();



    }
    public function logout(){
        auth()->logout();
        
        return redirect()->route('home');
        
    }
}
