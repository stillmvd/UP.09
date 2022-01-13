<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Проверка на существование пользователя в базе
    public function login (LoginRequest $request) {

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect('/')->with('successAuth', true);
        }
        return back()->withErrors([
            'formError' => 'Мы не нашли такого пользователя'
        ]);
    }

    //Регистрация нового пользователя
    public function registrate (RegisterRequest $request) {
        $request->merge(['password' => Hash::make($request->password)]);
        $user = User::create($request->all());
        Auth::login($user);
        return redirect('/')->with('successReg', true);
    }
}
