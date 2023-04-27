<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Specialist;
use Illuminate\Http\Request;

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
        return view('backend.pages.doctors.form', compact('specialists'));
    }
    public function store(Request $request)
    {
        $filename = null;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/update/doctor', $filename);
        }

        Doctor::create([

            'name' => $request->name,
            'specialist_id' => $request->specialist_id,
            'department' => $request->department,
            'qualification' => $request->qualification,
            'mobile_number' => $request->mobile_number,
            "image" =>  $filename
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
}
