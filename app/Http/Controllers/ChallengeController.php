<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function index(Request $request)
    {
         if ($request->has('search')) {
          $challenges = Challenge::where('title', 'LIKE', '%' .$request->search. '%')->orderBy('id', 'DESC')->paginate(3);
        }else {
            $challenges = Challenge::orderBy('id', 'DESC')->paginate(3);
        }
            return view('dashboard.challenges.index', compact('challenges'));
    }

    public function create()
    {
        return view('dashboard.challenges.create');
    }

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


    public function show($id)
    {
        return view('dashboard.challenges.show');
    }

    public function edit(Challenge $challenge)
    {
        return view('dashboard.challenges.edit', compact('challenge'));
    }

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


    public function destroy($id)
    {
        Challenge::find($id)->delete();
         return back()->with('success', 'Data delete was successful!');
    }
}