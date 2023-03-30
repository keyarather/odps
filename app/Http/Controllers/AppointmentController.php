<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function list()
    {
        return view('pages.appointment.list');
    }
    public function create()
    {
        return view('pages.appointment.form');
    }
}
