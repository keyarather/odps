<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function list (){
        $doctors=Doctor::all();
        return view ('frontend.page.doctor.table',compact('doctors'));
    }
}
