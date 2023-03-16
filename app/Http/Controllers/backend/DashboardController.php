<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view ('master');
    }

    public function dashboardView(){
        return view ('pages.body');
    }
}
