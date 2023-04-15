<?php

namespace App\Http\Controllers;

use App\Models\Chember;
use Illuminate\Http\Request;

class ChamberController extends Controller
{
    public function list()
    {
        $chember = Chember::all();
        return view('backend.pages.chamber.list', compact("chember"));
    }
    public function form()
    {
        return view('backend.pages.chamber.form');
    }
    public function store(request $request)
    {

        Chember::create([
            "address" => $request->address,
            "name" => $request->name
        ]);
        return redirect()->route('chamber.list');
    }
}
