<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function list()
    {
        return view('pages.prescription.list');
    }
    //
}
