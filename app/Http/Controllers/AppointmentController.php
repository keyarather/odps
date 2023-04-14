<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function list()
    {
        return view('backend.pages.Appointment.list');
    }
    public function create()
    {
        return view('backend.pages.Appointment.form');
    }
    public function store(request $request)
    {

      
       Appointment::create([
        "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "date"=>$request->date,
            "appointment_id"=>$request->appointment_id,

       ]);

       return redirect()->back();

    }
}
