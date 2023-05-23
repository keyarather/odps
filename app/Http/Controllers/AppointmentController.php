<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\ApproveReject;
use App\Models\Doctor;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{

    public function list()
    {
        $appo = Appointment::all();
        $doctor=Doctor::all();
        return view('backend.pages.Appointment.list', compact('appo','doctor'));
    }
    public function create()
    {
        $appo = Appointment::all();
        $doctor=Doctor::all();
        return view('backend.pages.Appointment.form', compact('appo','doctor'));
    }
    public function store(request $request)
    {
        // dd($request->all());
        // $validate=Validator::make($request->all(),[
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'date' => 'required|after:tomorrow',
        //     'department_id'=>'required',
        //     'time_slot' => 'required'
        // ]);

        // if($validate->fails())
        // {
        //     toastr()->error('Invalid Information');
        //     return redirect()->back();
        // }

        $checkExist=Appointment::whereDate('date',$request->date)->where('time_slot',$request->time_slot)->where('doctor_id',$request->doctor_id)->first();
       
       if(!$checkExist){
        Appointment::create([
            "name" => $request->name,
            "email" => $request->email,
            "date" => $request->date,
            "phone" => $request->phone,
           
            "department_id" => $request->department_id,
            "time_slot" => $request->time_slot,
            "doctor_id" => $request->doctor_id,
            

        ]);
        toastr()->success('Appointment Success');
        return redirect()->back();
       }
       
        toastr()->error('Appointment exist.');
        return redirect()->back();
    }
    public function delete($id)
    {
        Appointment::findOrFail($id)->delete();
        return to_route('appointment.list');
    }
    public function edit($id)
    {
        $edit = Appointment::find($id);
        return view('backend.pages.Appointment.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $edit = Appointment::find($id);
        $edit->update([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "date" => $request->date,
            "time_slot" => $request->time_slot

        ]);

        return redirect()->route('appointment.list');
    }



    public function approve($id)
    {
        //dd($id);
        $appoint = Appointment::findOrFail($id);
        $appoint->update([
            'status' => 'approved',
        ]);
        toastr()->success(' approved');
        return redirect()->back();
    }
    public function reject($id)
    {
        //dd($id);

        $appoint = Appointment::find($id)->update([
            'status' => 'rejected'
        ]);

        toastr()->success('approved');
        return redirect()->back();
    }
    public function history(){
        
        
        
        $patientprofile=Appointment::where('email', auth()->user()->email)->where('status',"approved")->get();
        // dd($patientprofile);
        
        return view('frontend.page.patientprofile.table',compact('patientprofile'));
    } 
    
    }

   


