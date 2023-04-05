<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function list()
    {
        return view('backend.pages.Appointment.list');
    }
    public function create()
    {
        return view('backend.pages.Appointment.form');
    }
}
