<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PatientController extends Controller
{
    public function list()
    {
        
        $patients = Appointment::where('status','approved')->get();
        return view('backend.pages.patients.list', compact('patients'));
        
    }
    public function create()
    {
        $departments = Department::all();
        return view('backend.pages.patients.form', compact('departments'));
    }
    public function store(Request $request)
    {
        
      
        Appointment::create([
            'name' => $request->name,
            'department_id' => $request->department_id,
            'mobile' => $request->mobile,
            'email' => $request->email

        ]);
        return redirect()->route('patient.list');
    }

    public function edit($id)
    {
        $patient =Patient::find($id);
        $departments = Department::all();
        return view('backend.pages.patients.edit', compact('patient', 'departments'));      
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        $filename = $patient->image;
        if ($request->hasfile('image')) {
            $remove = public_path().'/update/category/'.$filename;
            File::delete($remove);
            $file = $request->file('image');
            $filename = date('ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/update/category', $filename);
        }
        $patient->update([
            'name' => $request->name,
            'department_id' => $request->department_id,
            'mobile' => $request->mobile,
            'image' => $filename,
            'email' => $request->email

        ]);
        return redirect()->route('patient.list');
    }
}
