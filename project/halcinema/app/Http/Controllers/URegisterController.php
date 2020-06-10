<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class URegisterController extends Controller
{
    public function index(){
        return view('iw32.public.view.register');
    }
}
