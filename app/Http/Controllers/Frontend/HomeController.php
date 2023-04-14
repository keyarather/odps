<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function web()
    {
        $doctors = Doctor::all();
        return view('frontend.file.webhome', compact('doctors'));
    }
}
