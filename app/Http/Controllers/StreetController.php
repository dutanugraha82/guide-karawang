<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StreetController extends Controller
{
    public function index(){
        return view('street/street');
    }
}
