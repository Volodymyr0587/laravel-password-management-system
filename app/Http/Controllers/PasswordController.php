<?php

namespace App\Http\Controllers;

use App\Models\Password;
use Illuminate\Http\Request;
use App\Utils\PaginateCollection;

class PasswordController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $passwords = Password::latest()->whereBelongsTo($user)->get();
        $passwords = PaginateCollection::paginate($passwords, 5);

        return view('passwords.index', [
            'passwords' => $passwords
        ]);
    }

    public function create()
    {
        return view('passwords.create');
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

        return redirect('passwords');
    }

    public function destroy(Password $password)
    {
        $this->authorize('delete', $password);

        $password->delete();

        return back();
    }
}
