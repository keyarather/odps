<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function list()
    {
        $doctors = Doctor::all();
        return view('backend.pages.doctors.list',compact('doctors'));
    }
    public function create()
    {
        return view('backend.pages.doctors.form');
    }
    public function store (Request $request)
    {
        
         Doctor::create([

            'name'=>$request->name,
            'depertment'=>$request->department,
            'qualification'=>$request->qualification,

         ]);
         return redirect()->route('doctor.list');

}


    public function view($id)
    {
        $doctor=Doctor::find($id);
        return view('backend.doctors.view',compact('doctor'));
    }

    public function delete($id)
    {
        Doctor::find($id)->delete();
        return redirect()->back();
    }
}