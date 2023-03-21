<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appoList()
    {
        return view('pages.Appointment.list');
    }
}
