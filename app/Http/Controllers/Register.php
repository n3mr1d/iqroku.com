<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewTPA;
use Inertia\Inertia;

class Register extends Controller
{
    public function newTpa()
    {
        return Inertia::render('Register/newtpa');
    }

    public function storeTpa(CreateNewTPA $request)
    {
        dd($request->all());
    }
}
