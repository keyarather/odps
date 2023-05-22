<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Registrationform;
use App\Models\User;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    public function web()
    {
        $department = Department::all();
        $doctors = Doctor::all();
        return view('frontend.file.webhome', compact('doctors', 'department'));
    }

    public function registrationform()
    {
        return view('frontend.page.registrationform');
    }
    public function registrationformshow(Request $request)
    {

        $request -> validate([
            "first_name" => 'required',
            "last_name" => 'required',
            "birthday" => 'after:01/01/1950|before:05/20/2023',
            "gender" => 'required',
            "email" => 'required',
            "phone" => 'required',
            "password" => 'required',
            
        ]);
        // dd($request->all());
        user::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "birthday" => $request->birthday,
            "gender" => $request->gender,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => bcrypt($request->password),
            "role" => $request->role


        ]);



        return redirect()->route("website");
    }

    public function profile()
    {
        return view('frontend.file.profile');
    }

    // public function updateProfile(Request $request)
    // {
    //    //validation

    //     $user=User::find(auth()->user()->id);
    //     $user->update([
    //        'name'=>$request->user_name,
    //        'address'=>$request->user_address,
    //        'phone'=>$request->user_mobile,
    //     ]);

    //     toastr()->success('User profile updated.');
    //     return redirect()->back();
    // }

}
