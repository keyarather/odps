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
            "name" => $req->name,
            "status" => $req->status
        ]);
        return redirect()->route('specialist.list');
    }

    public function delete($id)
    {
        Specialist::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $info = Specialist::find($id);
        return view('backend.pages.specialist.edit', compact('info'));
    }

    public function update(Request $req, $id)
    {
        $info = Specialist::find($id);
        $info->update([
            "name" => $req->name,
            "status" => $req->status
        ]);
        return redirect()->route('specialist.list');
    }
}
