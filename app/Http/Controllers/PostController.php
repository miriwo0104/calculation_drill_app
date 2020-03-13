<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addition() {
        return view('post.addition');
    }

    public function addition_answer() {
        return view('post.addition_answer');
    }

    public function subtraction() {
        return view('post.subtraction');
    }

    public function subtraction_answer() {
        return view('post.subtraction_answer');
    }
}
