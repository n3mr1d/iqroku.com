<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class Register extends Controller
{
    public function newTpa()
    {
        return Inertia::render('Register/newtpa');
    }

    public function storeTpa(Request $request)
    {
        dd($request->all());
    }
}
