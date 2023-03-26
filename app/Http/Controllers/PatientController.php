<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function list()
    {
        return view('pages.patients.list');
    }
       public function create()
       {
        return view('pages.patients.form');
       }
    

    
}
