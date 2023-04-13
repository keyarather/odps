<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function list()
    {
        $departments = Department::all();
        return view('backend.pages.department.list', compact('departments'));
    }

    public function form()
    {
        return view('backend.pages.department.form');
    }

    public function store(Request $request)
    {
        Department::create([
            'name'  =>  $request->name,
            'status'  =>  $request->status,
        ]);

        return to_route('department.list');
    }

    public function edit($id)
    {
        $edit = Department::find($id);
        return view('backend.pages.department.edit', compact('edit'));      
    }

    public function update(Request $request, $id)
    {
        $edit = Department::find($id);

        $edit->update([
            'name'  =>  $request->name,
            'status'  =>  $request->status,
        ]);

        return to_route('department.list');
    }

    public function delete($id)
    {
        $delete = Department::findOrFail($id)->delete();
        return to_route('department.list');
    }
}
