<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function list()
    {
        $patients = Patient::all();
        return view('backend.pages.patients.list', compact('patients'));
    }
    public function create()
    {
        return view('backend.pages.patients.form');
    }
    public function store(Request $request)
    {
        $filename = null;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/update/category', $filename);
        }

        Patient::create([
            'name' => $request->name,
            'department' => $request->department,
            'mobile_no' => $request->mobile_no,
            'image' => $filename,
            'p_email' => $request->p_email

        ]);
        return redirect()->route('patient.list');
    }
}
