<?php

namespace App\Http\Controllers;

use App\Models\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function index()
    {
        return view('passwords.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'resource' => 'required',
            'login' => 'required',
            'password_to_resource' => 'required',
            'additional_info' => 'nullable|max:1000'
        ]);

        $request->user()->passwords()->create([
            'resource' => $request->resource,
            'login' => $request->login,
            'password' => $request->password_to_resource,
            'additional_info' => $request->additional_info
        ]);

        return back();
    }
}
