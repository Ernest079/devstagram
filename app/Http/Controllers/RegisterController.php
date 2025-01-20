<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request);
        // dd($request->get('username'));
        // $this->validate($request, [
        //     'name' => 'required',
        // ]);
        // ,[
        //     'name.required'=>'El nombre es requerido',
        //     'name.min'=>'El minimo de caracteres es 5',
        // ]
        $request->request->add(['username' => Str::slug($request->username),
    ]);

        $request->validate([
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:4',
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        //Autentificar Usuario
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('post.index');
    }
}
