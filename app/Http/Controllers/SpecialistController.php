<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function list()
    {
        $list = Specialist::paginate(5);
        return view('backend.pages.specialist.list', compact('list'));
    }

    public function form()
    {
        return view('backend.pages.specialist.form');
    }
    public function store(Request $req)
    {


        Specialist::create([
            "name" => $req->name
        ]);
        return redirect()->route('specialist.list');
    }
}
