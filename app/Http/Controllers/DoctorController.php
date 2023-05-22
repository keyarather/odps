<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Department;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DoctorController extends Controller
{
    public function list()
    {
        $doctors = Doctor::all();
        return view('backend.pages.doctors.list', compact('doctors'));
    }
    public function create()
    {
        $specialists = Specialist::all();
        $department = Department::all();
        return view('backend.pages.doctors.form', compact('specialists', 'department'));
    }
    public function store(Request $request)
    {
        $filename = null;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads/update/doctor', $filename);
        }

        Doctor::create([

            'name' => $request->name,
            'specialist_id' => $request->specialist_id,
            'department' => $request->department,
            'qualification' => $request->qualification,
            'mobile_number' => $request->mobile_number,
            'image'=>$filename
        ]);
        return redirect()->route('doctor.list');
    }


    public function view($id)
    {
        $doctor = Doctor::find($id);
        return view('backend.doctors.view', compact('doctor'));
    }

    public function delete($id)
    {
        Doctor::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $doctorInfo = Doctor::find($id);
        $department=Department::all();
        $specialists = Specialist::all();
        return view('backend.pages.doctors.edit', compact('doctorInfo', 'specialists' ,'department'));
    }

    public function update(Request $request, $id)
    {
        $doctorInfo = Doctor::find($id);
        $filename = $doctorInfo->image;
        if ($request->hasfile('image')) {
            $remove = public_path().'/update/doctor/'. $filename;
            File::delete($remove);
            $file = $request->file('image');
            $filename = date('ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/update/doctor', $filename);
        }

        $doctorInfo->update([

            'name' => $request->name,
            'specialist_id' => $request->specialist_id,
            'department' => $request->department,
            'qualification' => $request->qualification,
            'mobile_number' => $request->mobile_number,
            "image" =>  $filename
        ]);
        return redirect()->route('doctor.list');
    }
}
