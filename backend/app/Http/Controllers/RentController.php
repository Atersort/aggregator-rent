<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;

class RentController extends Controller
{


    public function create()
    {
        return view('profile.user.create-rent');
    }

    public function store(Request $request)
    {
        Rent::create([
            'title' => $request->input('title'),
            'address' => $request->input('address'),
            'price' => $request->input('price'),
            'rooms' => $request->input('rooms'),
            'description' => $request->input('description'),
            'user_id' => auth()->id(),
        ]);

        return redirect('/dashboard');
    }

    public function index()
    {
        $all_rent = Rent::where('user_id', auth()->id())->orderBy('created_at', 'desc')->paginate(3);

        if ($all_rent->isEmpty()) {
            return view('dashboard', ['all_rent' => $all_rent, 'message' => 'No rent listings found.']);
        }

        return view('dashboard', ['all_rent' => $all_rent]);
//        return response()->json(['all_rent' => $all_rent]);
    }

    public function edit($id)
    {
        $rent = Rent::findOrFail($id);

        return view('profile.user.edit-rent', ['rent' => $rent]);
    }

    public function update(Request $request, $id)
    {
        $rent = Rent::findOrFail($id);

        $rent->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'address' => $request->input('address'),
            'price' => $request->input('price'),
            'rooms' => $request->input('rooms'),
        ]);

        return redirect('/dashboard');
    }

    public function all_index()
    {
        $all_rent = Rent::orderBy('created_at', 'desc')->paginate(4);
        return view('home', ['all_rent' => $all_rent]);
    }

    public function view($id)
    {
        $view = Rent::find($id);

        return view('layouts.view', ['view' => $view]);
    }
}
