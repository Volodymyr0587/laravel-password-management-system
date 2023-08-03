<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserInfoController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('userinfo', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $this->validate($request, [
            'newname' => 'required|max:255',
            'newusername' => 'required|max:255',
            'newemail' => 'required|email|max:255',
            'newpassword' => 'required|confirmed'
        ]);

        $user = auth()->user();

        $user->update([
            'name' => $request->newname,
            'username' => $request->newusername,
            'email' => $request->newemail,
            'password' => Hash::make($request->newpassword),

        ]);

        auth()->attempt($request->only('email', 'password'));

        $user->save();

        return redirect()->route('dashboard');
    }
}
