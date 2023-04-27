<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Registrationform;
use App\Models\User;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    public function web()
    {
        $doctors = Doctor::all();
        return view('frontend.file.webhome', compact('doctors'));
    }

    public function registrationform()
    {
        return view('frontend.page.registrationform');
    }
    public function registrationformshow(Request $request)
    {

        // dd($request->all());
        Registrationform::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "birthday" => $request->birthday,
            "gender" => $request->gender,
            "email" => $request->email,
            "phone_number" => $request->phone_number,


        ]);



        return redirect()->route("login");
    }
}
