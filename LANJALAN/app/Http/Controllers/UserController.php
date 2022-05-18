<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());
       
        return redirect('/login')->with('success','Akun berhasil dibuat!');
    }
}
