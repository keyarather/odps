<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function list()
    {
        return view('pages.payment.list');
    }
    public function create()
    {
        return view('pages.payment.form');
    }
    public function store(request $request)
    {
        
    }
}