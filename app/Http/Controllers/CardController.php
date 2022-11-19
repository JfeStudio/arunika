<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardController extends Controller
{
    public function index(){
        return view('cards.index', [
            'challenges' => DB::table('challenges')->get(),
        ]);
    }
}