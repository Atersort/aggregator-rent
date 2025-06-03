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
        dd($request->toArray());
        Rent::create([
            'title' => $request->input('title'),
            'address' => $request->input('address'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'user_id' => auth()->id(),
        ]);

        return redirect('/dashboard');
    }

    public function index()
    {
        $all_rent = Rent::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();

        return view('dashboard', ['all_rent' => $all_rent]);
    }
}
