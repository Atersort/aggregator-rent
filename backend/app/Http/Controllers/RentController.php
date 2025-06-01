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
            'description' => $request->input('description'),
            'user_id' => auth()->id(),
        ]);

        return redirect('/dashboard');
    }
}
