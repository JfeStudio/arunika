<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('dashboard.users.index', [
            'users' => User::orderBy('id', 'DESC')->paginate(3),
        ]);
    }
}