<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
   
    public function list()
    {
        $appo=Appointment::all();
        return view('backend.pages.Appointment.list',compact('appo'));
    }
    public function create()
    {
        $appo=Appointment::all();
        return view('backend.pages.Appointment.form',compact('appo'));
    }
    public function store(request $request)
    {
//dd($request->all())
      
       Appointment::create([
        "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "date"=>$request->date,
       

       ]);
       

       return redirect()->back();

    }
    public function delete($id)
    {
        Appointment::findOrFail($id)->delete();
        return to_route('appointment.list');
    }
}
