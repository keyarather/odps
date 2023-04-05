<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function list()
    {
        return view('backend.pages.specialist.list');

    }

    public function create(){
        return view('backend.pages.specialist.form');

    }
    public function store(Request $request){
        Specialists::create([''])


    }

}
