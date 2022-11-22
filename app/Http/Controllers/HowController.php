<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowController extends Controller
{
    public function index(){
        return view('hows.index');
    }
}