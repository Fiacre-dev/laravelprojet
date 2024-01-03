<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }

    public function handleRegistation(RegistrationRequest $request)
    {
        User::create([
            "nom" => $request->nom,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "is_admin" => 0,
        ]);
        session()->flash("success", "Inscription réussie");
        return to_route("login");
    }

    public function login()
    {
        return view("auth.login");
    }
    public function handleLogin(LoginRequest $request)
    {
        $credentials = $request->only(["email", "password"]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended("/");
        }

        return back()->withErrors([
            'email' => 'Identifiants invalides',
        ])->onlyInput('email');
    }
}
