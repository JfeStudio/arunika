<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.challenges.index', [
            'challenges' => Challenge::orderBy('id', 'DESC')->paginate(3),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.challenges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fee' => ['required'],
            'title' => ['required', 'unique:challenges', 'string', 'min:3', 'max:255',],
            'markup' => ['required', 'string', 'min:3', 'max:255', 'alpha'],
            'styling' => ['required'],
            'language' => ['required'],
            'mode' => ['required'],
            // 'images' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'min:10', 'max:255'],
        ]);
        $input = $request->all();
         if ($images = $request->file('images')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $profileImage);
            // $nameFile = $request->file('images');
            // $validatedData['image'] = $request->file('image')->store('post-image');
            $input['images'] = $profileImage;
        }
        Challenge::create($input);
        // dd($input);
        return redirect('challenges')->with('success', 'Data was successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.challenges.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Challenge $challenge)
    {
        return view('dashboard.challenges.edit', compact('challenge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $request->validate([
            'fee' => ['required'],
            'title' => ['required', 'string', 'min:3', 'max:255',],
            'markup' => ['required', 'string', 'min:3', 'max:255', 'alpha'],
            'styling' => ['required'],
            'language' => ['required'],
            'mode' => ['required'],
            // 'images' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'min:10', 'max:255'],
        ]);
        // dd($request);
        $input = $request->all();
        if ($images = $request->file('images')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $profileImage);
            // $nameFile = $request->file('images');
            // $validatedData['images'] = $request->file('image')->store('post-image');
            $input['images'] = $profileImage;
        }else {
            unset($input['images']);
        }

        Challenge::find($id)->update($input);
        return redirect('challenges')->with('success', 'Edited was successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Challenge::find($id)->delete();
         return back()->with('success', 'Data delete was successful!');
    }
}