<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function list()
    {
        return view('pages.patients.list');
    }
}
