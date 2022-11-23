<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Challenge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardController extends Controller
{
    public function index(){
        return view('cards.index', [
            'challenges' => DB::table('challenges')->orderBy('id', 'DESC')->get(),
        ]);
    }
        public function show($id){
        return view('cards.show', [
            'challenges' => DB::table('challenges')->where('id', $id)->first(),
        ]);
    }
}