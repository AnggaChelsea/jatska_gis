<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('layouts/frontend');
    }
    public function backend(){
        return view('layouts/backend');
    }
    public function map(){
        return view('map');
    }
}
