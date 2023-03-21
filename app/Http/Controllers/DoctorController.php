<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function list()
    {
        return view('pages.doctors.list');
    }
}
