<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinesssettingController extends Controller
{
    public function list()
    {
        return view('backend.pages.business setting.list');
    }
    //
}
