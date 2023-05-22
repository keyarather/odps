<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Specialist;
use App\Models\User;
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
            toastr()->success('Login Success');
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

        toastr()->success('Logout Success');

        return redirect()->route('home');

    }

    public function dashboardhome(){

        $totalPataint = Appointment::where('status', 'approved')->get()->count();
        $totalAppointment = Appointment::all()->count();
        $totalDoctor = Doctor::all()->count();
        $totalSpecialist = Specialist::all()->count();

        return view('backend.pages.dashboard.dashboard',compact('totalPataint','totalAppointment','totalDoctor','totalSpecialist'));
    }
}
