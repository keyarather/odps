<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function list()
    {
        $patients=Patient::all();
        return view('backend.pages.patients.list',compact('patients'));
    }
       public function create()
       {
        return view('backend.pages.patients.form');
       }
       public function store(Request $request)
       {
        //dd($request->all());
        Patient::create([
            'name'=>$request->name,
            'department'=>$request->department,
            'mobile_no'=>$request->mobile_no,
            'P_email'=>$request->p_email,
            
        ]);
        return redirect()->route('patient.list');

       }
    

    
}
