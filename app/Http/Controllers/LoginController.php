<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginfront(Request $request)
    {

        $credential = $request->except('_token');
        if (auth()->attempt($credential)) {
            return redirect()->back();
        }

        return redirect()->back();
    }


    public function logout(){
    
        auth()->logout();
        return redirect()->back();

    }
}
