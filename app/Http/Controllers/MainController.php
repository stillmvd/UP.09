<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function home () {
        if (Auth::check()) {
            return view('homeReg');
        }
        return view('home');
    }
    public function registration () {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('registration');
    }
    public function login () {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('login');
    }
    public function cabinet () {
        if (Auth::check()) {
            return view('cabinet');
        }
        return view('home');
    }
    public function logout () {
        Auth::logout();
        return redirect('/');
    }
}
