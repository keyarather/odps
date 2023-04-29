<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
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
        //dd($request->all())
        $request->validate(
            [
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'date'=>'required|after:start_date_field|before:end_date_field'
        ]
    );

        Appointment::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "date" => $request->date,
        ]);


        return redirect()->back()->with('Success','Registration Success');
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
}
