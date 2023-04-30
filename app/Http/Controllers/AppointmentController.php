<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\ApproveReject;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    public function list()
    {
        $appo = Appointment::all();
        return view('backend.pages.Appointment.list', compact('appo'));
    }
    public function create()
    {
        $appo = Appointment::all();
        return view('backend.pages.Appointment.form', compact('appo'));
    }
    public function store(request $request)
    {
        //dd($request->all());
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users',
                'phone' => 'required',
                'date' => 'required'
            ]
        );

        Appointment::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "date" => $request->date,
        ]);

        toastr()->success('Appointment Success');
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
        ]);

        return redirect()->route('appointment.list');
    }



    public function approve($id)
    {
        //dd($id);
        $appoint = Appointment::findOrFail($id);
        $appoint->update([
            "status" => 'approved',
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

   

}
