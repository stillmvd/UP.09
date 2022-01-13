<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function posts() {
        if (Auth::user()) {
            $posts = DB::table('posts')->get();
            return view('homeReg', compact('posts'));
        }
        return view('home');
    }

    public function create() {
        return view('cabinet');
    }

    public function store(PostRequest $request){

    }
}
