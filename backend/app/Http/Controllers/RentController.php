<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentController extends Controller
{
    public function create()
    {
        return view('profile.user.create-rent');
    }

    public function store(Request $request)
    {

    }
}
