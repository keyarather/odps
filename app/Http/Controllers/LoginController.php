<?php

namespace App\Http\Controllers;

use toastr;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginfront(Request $request)
    {

        $credential = $request->except('_token');
        if (auth()->attempt($credential)) {
            return redirect()->back();
        }
        toastr()->success('Login Success');
        return redirect()->back();
    }


    public function logout(){


        auth()->logout();
        toastr()->success('Logout Success');

        return redirect()->back();

    }
}
