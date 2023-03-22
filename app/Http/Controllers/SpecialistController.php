<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function list()
    {
        return view('pages.specialist.list');
    }
    //
}
