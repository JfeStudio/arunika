<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('home',[
            // 'title' => '| Home',
            'challenges' => DB::table('challenges')->orderBy('id', 'DESC')->skip(0)->take(6)->get(),
        ]);
    }

    public function show($id){
        // dd($challenge);
        return view('homes.show', [
            'challenges' => DB::table('challenges')->where('id', $id)->first(),
        ]);
    }
}