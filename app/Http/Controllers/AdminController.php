<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function registro()
    {
        return view('auth.register');
    }
    public function registroAdmin()
    {
        return view('auth.registerAdmin');
    }
    public function store(Request $request)
    {
        $userAdmin = new User();
        $userAdmin->name = $request->input('name');
        $userAdmin->email = $request->input('email');
        $userAdmin->password = $request->input('password');
        $userAdmin->admin = $request->input('admin');
        $userAdmin->save();
        back()->with('status', 'Usuario creado correctamente');
        return to_route('admin.administrador');
    }

    public function administrador()
    {
        return view('admin.administrador');
    }
}
