<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function dashboard(){
        return view ('master');
    }

    public function dashboardView(){
        return view ('pages.body');
    }
    public function login()
    {
        return view('pages.login');
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
        if(auth()->attempt($credentials)){
            
            return redirect()->route('home');
        }
        return redirect()->back();

    }
}
