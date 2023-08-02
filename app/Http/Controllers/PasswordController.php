<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        return view('passwords.index');
    }

    public function store(Request $request)
    {
        dd('ok');
    }
}
