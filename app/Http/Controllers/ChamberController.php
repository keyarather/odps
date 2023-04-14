<?php

namespace App\Http\Controllers;

use App\Models\Chember;
use Illuminate\Http\Request;

class ChamberController extends Controller
{
    public function list(){

        return view('backend.pages.chamber.list');


    }
    public function form(){
        return view('backend.pages.chamber.form');
    }
    public function store(request $request){

        //dd($request->all());

        Chember::create([
        
            
            $table->id();
            $table->string("name");
            $table->string("address");
            $table->timestamps();
        
            ]);
            return redirect()->route('chamber.list');
            
    }
}
