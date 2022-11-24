<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function __invoke()
    {
        return view('solutions.index');
    }
}